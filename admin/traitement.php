<?php
require_once 'db.php'; 

// 1. Vérifier la réception des données
if (!isset($_POST['username'], $_POST['password'])) {
    die("Données manquantes");
}

// 2. Récupération + sécurisation
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// 3. Vérifier si l'utilisateur existe déjà
$sqlCheck = "SELECT COUNT(*) FROM membres WHERE username = :username";
$stmtCheck = $pdo->prepare($sqlCheck);
$stmtCheck->execute([
    ':username' => $username
]);

$exists = $stmtCheck->fetchColumn();

if ($exists > 0) {
    die(" Erreur : utilisateur déjà existant");
}

// 4. Hash du mot de passe
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// 5. Insertion
$sqlInsert = "INSERT INTO membres (username, password)
              VALUES (:username, :password)";
$stmtInsert = $pdo->prepare($sqlInsert);
$stmtInsert->execute([
    ':username' => $username,
    ':password' => $passwordHash
]);

// 6. Nombre d'enregistrements impactés
$nb = $stmtInsert->rowCount();
echo "$nb enregistrement(s) ajouté(s)";
