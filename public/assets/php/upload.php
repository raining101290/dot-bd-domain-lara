<?php
require_once "db/db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['company_id'])) {
    $user_id = intval($_POST['company_id']);

    // Directory for this user's files
    $uploadDir = __DIR__ . "/../../uploads/users/$user_id/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $uploadedFiles = [];
    $errors = [];

    // Loop through all uploaded files
    foreach ($_FILES as $fieldName => $fileInfo) {
        if ($fileInfo['error'] === 0) {
            $fileExt = pathinfo($fileInfo['name'], PATHINFO_EXTENSION);
            $fileName = $fieldName . "_" . time() . "." . $fileExt;
            $targetFile = $uploadDir . $fileName;

            $documentName = $_POST[$fieldName . '_label'] ?? $fileInfo['name'];

            if (move_uploaded_file($fileInfo['tmp_name'], $targetFile)) {
                // Save in DB
                $stmt = $pdo->prepare("INSERT INTO user_attachments 
                    (user_id, document_name, file_name, file_path, file_type) 
                    VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([
                    $user_id,
                    $documentName,
                    $fileName,
                    "uploads/users/$user_id/$fileName",
                    $fileInfo['type']
                ]);
                $uploadedFiles[] = $fileName;
                $_SESSION['STEP1'] = false; 
                $_SESSION['COMPANY_STEP1'] = false; 
            } else {
                $errors[] = "Failed to move file: " . $fileInfo['name'];
            }
        } else {
            $errors[] = "Upload error for file: " . $fileInfo['name'];
        }
    }

    if (count($errors) > 0) {
        echo json_encode([
            'status' => 'error',
            'message' => implode(", ", $errors)
        ]);
    } else {
        echo json_encode([
            'status' => 'success',
            'message' => 'Files uploaded successfully',
            'files' => $uploadedFiles
        ]);
    }
}
