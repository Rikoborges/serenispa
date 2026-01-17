<?php

if ($_SERVER['HTTP_HOST'] === 'localhost') {
    require __DIR__ . '/db.local.php';
} else {
    require __DIR__ . '/db.prod.php';
}

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
