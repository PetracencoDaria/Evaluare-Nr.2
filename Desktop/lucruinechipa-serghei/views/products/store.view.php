<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php if ($product): ?>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($product->nume); ?></h5>
                                    <p class="card-text"><strong>Description:</strong>
                                        <?php echo nl2br(htmlspecialchars($product->descriere)); ?></p>
                                    <p class="card-text"><strong>Price:</strong>
                                        $<?php echo number_format($product->pret, 2); ?></p>
                                        <p class="card-text"><strong>Stoc:</strong>
                                        $<?php echo number_format($product->stoc, 2); ?></p>
                                        <p class="card-text"><strong>Type:</strong>
                                        <?php echo nl2br(htmlspecialchars($product->tip)); ?></p>
                                        <p class="card-text"><strong>Benifits:</strong>
                                        <?php echo nl2br(htmlspecialchars($product->beneficii)); ?></p>
                                    <a href="#" class="btn btn-primary btn-sm">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                Nu o fost gasit asa produs!
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>