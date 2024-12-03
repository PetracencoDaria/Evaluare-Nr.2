<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Produs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff8e1;
            /* Fundal crem deschis */
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #ffecb3;
            /* Galben deschis */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #6d4c41;
            /* Maro închis */
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #4e342e;
            /* Maro */
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        button {
            background-color: #ffd54f;
            /* Galben apicol */
            color: #4e342e;
            /* Maro */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            width: 100%;
            font-weight: bold;
        }

        button:hover {
            background-color: #ffca28;
            /* Galben mai intens */
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Adaugă un produs nou</h1>
        <form method="POST" action="/products/store">
            <div class="mb-3">
                <label for="name" class="form-label">Nume:</label>
                <input type="text" name="nume" id="nume" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descriere:</label>
                <textarea name="descriere" id="descriere" rows="3" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preț:</label>
                <input type="number" name="pret" id="pret" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stoc:</label>
                <input type="number" name="stoc" id="stoc" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tip:</label>
                <input type="text" name="tip" id="tip" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="benefits" class="form-label">Beneficii:</label>
                <textarea name="beneficii" id="beneficii" rows="3" class="form-control"></textarea>
            </div>
            <button type="submit">Adaugă</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>