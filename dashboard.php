<?php
require_once 'includes/auth.php';
include '../partials/header-admin.php';
?>

<h2>Dashboard admin</h2>
<p>Bienvenue <?= htmlspecialchars($_SESSION['admin_username']) ?></p>

<a href="logout.php">Se déconnecter</a>

<?php include '../partials/footer-admin.php'; ?>
