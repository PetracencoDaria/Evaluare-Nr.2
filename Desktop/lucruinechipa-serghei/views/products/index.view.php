<!DOCTYPE html>
<html>
<head>
    <title>Produse Apicole</title>
</head>
<body>
    <h1>Lista de Produse Apicole</h1>
    <a href="/products/create">Adaugă un produs nou</a>
    <ul>
    <ul>
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="/products/show/<?= $product->id; ?>"><?= htmlspecialchars($product->nume); ?></a> 
                - <?= htmlspecialchars($product->pret); ?> lei
                <a href="/products/<?= $product->id; ?>/edit">Editează</a>
                  <form action="products/delete/<?= $product->id ?>" method="post" onclick="return confirm(`Esti sigur?`)">
                    <input type="hidden" name="_METHOD" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nu există produse disponibile.</p>
    <?php endif; ?>
</ul>
    </ul>
</body>
</html>
