<?php
// includes/db.php
$host = 'localhost';
$name = 'TIKI_db';      // must match the database you created in phpMyAdmin
$user = 'root';
$pass = '';             // WAMP default is empty

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$name;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    die('Database connection failed.');
}