<?php
//
try {
    $connexion = new PDO(
        "mysql:host=localhost;dbname=ma_bdd;charset=utf8",
        "utilisateur",
        "motdepasse",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// 2. Vérifier si les données existent
if (!isset($_POST['id'], $_POST['mdp'])) {
    die("Données manquantes");
}

// 3. Récupération et sécurisation
$id = (int) $_POST['id'];
$mdp = $_POST['mdp'];

// (option pro) hash du mot de passe
$mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

// 4. Requête préparée
$sql = "UPDATE membres SET mot_pass = :mdp WHERE id = :id";
$stmt = $connexion->prepare($sql);

// 5. Exécution
$stmt->execute([
    ':mdp' => $mdpHash,
    ':id' => $id
]);

// 6. Résultat
$affectes = $stmt->rowCount();
echo "$affectes enregistrement(s) mis à jour";
