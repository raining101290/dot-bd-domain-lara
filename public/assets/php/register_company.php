<?php
session_start();
require_once "form/CompanyValidator.php";
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

                // Collect company info
                $name = trim($_POST['name']);
                $web = trim($_POST['web'] ?? '');
                $registrant_type = trim($_POST['registrant_type'] ?? '');
                $registrant_categories = implode(",", $_POST['registrant_category']); 
                $telephone  = trim($_POST['telephone'] ?? '');
                $mobile     = trim($_POST['mobile']);
                $fax        = trim($_POST['fax'] ?? '');
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

                    // 2️⃣ Insert into organization_registrants table
                    $stmt = $pdo->prepare("
                        INSERT INTO organization_registrants
                        (user_id, registrant_name, web_address, mobile, telephone, fax, registrant_type, registrant_category, address, country, city, post_code)
                        VALUES
                        (:user_id, :name, :web, :mobile, :telephone, :fax, :registrant_type, :registrant_category, :address, :country, :city, :post_code)
                    ");

                    $stmt->execute([
                        ':user_id'             => $user_id,
                        ':name'                => $name,
                        ':web'                 => $web,
                        ':mobile'              => $mobile,
                        ':telephone'           => $telephone,
                        ':fax'                 => $fax,
                        ':registrant_type'     => $registrant_type,
                        ':registrant_category' => $registrant_categories,
                        ':address'             => $address,
                        ':country'             => $country,
                        ':city'                => $city,
                        ':post_code'           => $postcode,
                    ]);

                    // 3️⃣ Set session and respond
                    $_SESSION['new_user_id']   = $user_id;
                    $_SESSION['new_user_name'] = $name;
                    $_SESSION['new_username']  = $username;
                    $_SESSION['COMPANY_STEP1'] = true;
                    $_SESSION['registrant_type'] = $registrant_type;

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
