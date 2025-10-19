<?php

$configFile = __DIR__ . '/../../../config.php';

if (!file_exists($configFile)) {
    $configFile = __DIR__ . '/../../../config.example.php';
}

$config = include $configFile;

try {
    $pdo = new PDO("mysql:host={$config['DB_HOST']};port={$config['DB_PORT']};dbname={$config['DB_NAME']};charset=utf8mb4", $config['DB_USER'], $config['DB_PASS']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "✅ Database connected successfully!";
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}