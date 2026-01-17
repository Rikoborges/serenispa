<?php
session_start();
require_once '../db.php';

if (!isset($_POST['username'], $_POST['password'])) {
    die("Données manquantes");
}

$username = trim($_POST['username']);
$password = $_POST['password'];

$sql = "SELECT id, password FROM admins WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username
]);

$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if ($admin && password_verify($password, $admin['password'])) {

    // Connexion réussie
    $_SESSION['admin_id'] = $admin['id'];
    $_SESSION['admin_username'] = $username;

    header("Location: dashboard.php");
    exit;

} else {
    echo " Identifiants incorrects";
}
