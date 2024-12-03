<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editează Produs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Editează Produsul: <?= htmlspecialchars($product->nume); ?></h1>
        <!-- The form's action URL now targets the update route -->
        <form method="POST" action="/products/<?= $product->id; ?>">
            <!-- Hidden input to simulate PUT method (since HTML forms only support GET and POST) -->
            <input type="hidden" name="_METHOD" value="PUT">

            <div class="mb-3">
                <label for="nume" class="form-label">Nume:</label>
                <!-- Pre-fill the input field with the existing product name -->
                <input type="text" name="nume" id="nume" class="form-control"
                    value="<?= htmlspecialchars($product->nume); ?>" required>
            </div>

            <div class="mb-3">
                <label for="descriere" class="form-label">Descriere:</label>
                <!-- Pre-fill the textarea with the existing product description -->
                <textarea name="descriere" id="descriere" class="form-control"
                    rows="4"><?= htmlspecialchars($product->descriere); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="pret" class="form-label">Preț:</label>
                <!-- Pre-fill the input field with the existing product price -->
                <input type="number" name="pret" id="pret" class="form-control"
                    value="<?= htmlspecialchars($product->pret); ?>" required step="0.01">
            </div>

            <div class="mb-3">
                <label for="stoc" class="form-label">Stoc:</label>
                <!-- Pre-fill the input field with the existing stock amount -->
                <input type="number" name="stoc" id="stoc" class="form-control"
                    value="<?= htmlspecialchars($product->stoc); ?>" required step="1">
            </div>

            <div class="mb-3">
                <label for="tip" class="form-label">Tip:</label>
                <!-- Pre-fill the input field with the existing product type -->
                <input type="text" name="tip" id="tip" class="form-control"
                    value="<?= htmlspecialchars($product->tip); ?>" required>
            </div>

            <div class="mb-3">
                <label for="beneficii" class="form-label">Beneficii:</label>
                <!-- Pre-fill the textarea with the existing product benefits -->
                <textarea name="beneficii" id="beneficii" class="form-control"
                    rows="4"><?= htmlspecialchars($product->beneficii); ?></textarea>
            </div>
                <form method="POST" action="/products/<?= $product->id; ?>">
                    <!-- restul câmpurilor -->
                    <button type="submit" class="btn btn-dark btn-sm">Update</button>
                </form>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>