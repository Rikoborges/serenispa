<?php
require_once 'db.php';

if (!isset($_POST['nom'], $_POST['email'], $_POST['message'])) {
    die("Données manquantes");
}

$nom     = trim($_POST['nom']);
$email   = trim($_POST['email']);
$message = trim($_POST['message']);

$sql = "INSERT INTO contacts (nom, email, message)
        VALUES (:nom, :email, :message)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nom'     => $nom,
    ':email'   => $email,
    ':message' => $message
]);

$nb = $stmt->rowCount();
echo "$nb enregistrement(s) ajouté(s)";
