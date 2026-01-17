<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SereniSpa</title>

  <!-- CSS global -->
  <link rel="stylesheet" href="/assets/style.css">
</head>
<body>

<header>
  <nav>
    <a href="/serenispa/index.php" class="logo">
      <img src="/sereni.png" alt="Logo SereniSpa">
    </a>

    <button class="nav-toggle" aria-label="Menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </button>

    <ul class="nav-links">
      <li><a href="/serenispa/massage.php">Massages</a></li>
      <li><a href="/serenispa/products.php">Produits</a></li>
      <li><a href="/serenispa/equipe.php">Équipe</a></li>
      <li><a href="/serenispa/avis.php">Avis</a></li>
      <li><a href="/serenispa/contact.php">Contact</a></li>

      <?php if (isset($_SESSION['admin_id'])): ?>
        <li><a href="/serenispa/admin/dashboard.php">Admin</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</header>

<main>
