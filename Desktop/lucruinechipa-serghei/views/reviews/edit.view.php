<!DOCTYPE html>
<html>
<head>
    <title>Editează Produs</title>
</head>
<body>
    <h1>Editează Produsul</h1>
    <form method="POST" action="/products/<?= $product->id; ?>">
        <label for="name">Nume:</label>
        <input type="text" name="name" value="<?= $product->name; ?>" required><br>
        <label for="description">Descriere:</label>
        <textarea name="description"><?= $product->description; ?></textarea><br>
        <label for="price">Preț:</label>
        <input type="number" name="price" value="<?= $product->price; ?>" required><br>
        <label for="stock">Stoc:</label>
        <input type="number" name="stock" value="<?= $product->stock; ?>" required><br>
        <label for="type">Tip:</label>
        <input type="text" name="type" value="<?= $product->type; ?>" required><br>
        <label for="benefits">Beneficii:</label>
        <textarea name="benefits"><?= $product->benefits; ?></textarea><br>
        <button type="submit">Actualizează</button>
    </form>
</body>
</html>
