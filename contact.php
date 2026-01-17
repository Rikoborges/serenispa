<?php include 'partials/header.php'; ?>
<?php require_once 'db.php';
?>


<h2>Contato</h2>

<form action="save-contact.php" method="POST">
    <input type="text" name="name" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Mensagem" required></textarea>
    <button type="submit">Enviar</button>
</form>

<?php include 'partials/footer.php'; ?>
