<?php include '../partials/header-admin.php'; ?>

<h2>Connexion administrateur</h2>

<form action="traitement-login.php" method="POST">
  <input type="text" name="username" placeholder="Utilisateur" required>
  <input type="password" name="password" placeholder="Mot de passe" required>
  <button type="submit">Se connecter</button>
</form>

<?php include '../partials/footer-admin.php'; ?>
