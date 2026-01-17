<?php include 'partials/header.php'; ?>

<h2>Novo Massage</h2>

<form action="save-massage.php" method="POST">
    <input type="text" name="nom" placeholder="Nome do massage" required>

    <textarea name="description" placeholder="Descrição"></textarea>

    <input type="number" name="duree" placeholder="Duração (min)" required>

    <input type="number" step="0.01" name="prix" placeholder="Preço" required>

    <button type="submit">Salvar</button>
</form>

<?php include 'partials/footer.php'; ?>
