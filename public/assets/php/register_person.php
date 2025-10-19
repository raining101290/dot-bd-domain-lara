<?php
session_start();
require_once "form/Validator.php";
require_once "db/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['captcha'])) {
        $captcha = strtolower(trim($_POST['captcha']));
        if (isset($_SESSION['captcha_token']) && $_SESSION['captcha_token'] === $captcha) {

            $validator = new Validator($_POST);
            $result = $validator->validate();

            if ($result['status'] === 'error') {
                echo json_encode([
                    'status' => 'error',
                    'errors' => $result['errors']
                ]);
            } else {
                // Collect login info
                $username = trim($_POST['username']);
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $email    = trim($_POST['email']);
                $user_type = 'individual';

                // Collect individual info
                $name       = trim($_POST['name']);
                $father     = trim($_POST['father'] ?? '');
                $mother     = trim($_POST['mother'] ?? '');
                $gender     = trim($_POST['gender'] ?? null);
                $telephone  = trim($_POST['telephone'] ?? '');
                $mobile     = trim($_POST['mobile']);
                $dob        = trim($_POST['dob']);
                $fax        = trim($_POST['fax'] ?? '');
                $occupation = trim($_POST['occupation'] ?? '');
                $country    = trim($_POST['country']);
                $city       = trim($_POST['city']);
                $postcode   = trim($_POST['post']);
                $address    = trim($_POST['address']);

                try {
                    // 1️⃣ Insert into users table
                    $stmt = $pdo->prepare("
                        INSERT INTO users (username, password_hash, email, user_type)
                        VALUES (:username, :password, :email, :user_type)
                    ");
                    $stmt->execute([
                        ':username'  => $username,
                        ':password'  => $password,
                        ':email'     => $email,
                        ':user_type' => $user_type
                    ]);

                    $user_id = $pdo->lastInsertId();

                    // 2️⃣ Insert into individual_registrants table
                    $stmt = $pdo->prepare("
                        INSERT INTO individual_registrants
                        (user_id, registrant_name, father_name, mother_name, gender, telephone, mobile, date_of_birth, fax, occupation, country, city, post_code, address)
                        VALUES
                        (:user_id, :name, :father, :mother, :gender, :telephone, :mobile, :dob, :fax, :occupation, :country, :city, :postcode, :address)
                    ");

                    $stmt->execute([
                        ':user_id'    => $user_id,
                        ':name'       => $name,
                        ':father'     => $father,
                        ':mother'     => $mother,
                        ':gender'     => $gender,
                        ':telephone'  => $telephone,
                        ':mobile'     => $mobile,
                        ':dob'        => $dob,
                        ':fax'        => $fax,
                        ':occupation' => $occupation,
                        ':country'    => $country,
                        ':city'       => $city,
                        ':postcode'   => $postcode,
                        ':address'    => $address
                    ]);

                    // 3️⃣ Set session and respond
                    $_SESSION['new_user_id'] = $user_id;
                    $_SESSION['new_user_name'] = $name;
                    $_SESSION['new_username'] = $username;
                    $_SESSION['STEP1'] = true;

                    echo json_encode([
                        'status'  => 'success',
                        'message' => 'Registration successful!',
                        'user_id' => $user_id
                    ]);

                } catch (PDOException $e) {
                    if ($e->getCode() == 23000) {
                        echo json_encode([
                            'status' => 'error',
                            'message' => 'Username or Email already exists!'
                        ]);
                    } else {
                        echo json_encode([
                            'status' => 'error',
                            'message' => 'Database Error: ' . $e->getMessage()
                        ]);
                    }
                }

            }

        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid CAPTCHA']);
        }
    }
}
