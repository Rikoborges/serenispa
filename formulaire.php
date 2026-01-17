<?php include 'partials/header.php'; ?>

<h2>Créer un nouveau membre</h2>

<form action="save-contact.php" method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Envoyer</button>
</form>


<?php include 'partials/footer.php'; ?>
