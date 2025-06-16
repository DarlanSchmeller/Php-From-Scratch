<?php

// Database Credentials
$host = 'mysql';
$port = 3306;
$dbName = 'blog';
$username = 'john';
$password = 'root';
$charset = 'utf8';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset={$charset}";

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Fetch as Assoc array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Set PDO to handle errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there is an error, catch it here
    echo 'Connection failed: ' . $e->getMessage();
}