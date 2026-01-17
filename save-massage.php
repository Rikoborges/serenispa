<?php
require_once 'db.php';

//
if (
    empty($_POST['nom']) ||
    empty($_POST['duree']) ||
    empty($_POST['prix'])
) {
    die("❌ Campos obrigatórios não preenchidos.");
}

$sql = "INSERT INTO massages (nom, description, duree, prix)
        VALUES (:nom, :description, :duree, :prix)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nom' => $_POST['nom'],
    ':description' => $_POST['description'] ?? null,
    ':duree' => $_POST['duree'],
    ':prix' => $_POST['prix']
]);

echo "✅ Massage cadastrado com sucesso";
