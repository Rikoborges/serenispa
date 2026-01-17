<?php
require_once 'db.php';
include 'partials/header.php';

$sql = "SELECT * FROM products ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll();
?>

<h2>Nos Produits</h2>

<div class="products">
<?php foreach ($products as $product): ?>
    <div class="product">
        <h3><?= htmlspecialchars($product['nom']) ?></h3>
        <p><?= htmlspecialchars($product['description']) ?></p>
        <strong><?= number_format($product['prix'], 2) ?> €</strong>
    </div>
<?php endforeach; ?>
</div>

<?php include 'partials/footer.php'; ?>
