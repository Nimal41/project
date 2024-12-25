<?php
// Start a session to handle cart functionality
session_start();

// Define products array
$products = [
    [
        "id" => 1,
        "name" => "Hat",
        "image" => "images/whitehat.webp",
        "price" => 2100
    ],
    [
        "id" => 2,
        "name" => "Suncream",
        "image" => "images/suncream.jpeg",
        "price" => 1990
    ],
    [
        "id" => 3,
        "name" => "Knee Guard",
        "image" => "images/kneeguard.jpeg",
        "price" => 1790
    ],
    // Add the rest of your products here...
];

// Handle "Buy Now" button
if (isset($_POST['buy'])) {
    $productId = $_POST['product_id'];
    $product = array_filter($products, fn($p) => $p['id'] == $productId);

    if (!empty($product)) {
        $_SESSION['cart'][] = array_values($product)[0];
        $message = "Product added to cart!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATN Sports World - Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ATN Sports World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="cart.php" class="btn btn-outline-primary me-2">View Cart (<?php echo count($_SESSION['cart'] ?? []); ?>)</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Display Products -->
    <div class="container mt-4">
        <div class="row g-3">
            <?php foreach ($products as $product): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $product['name']; ?></h5>
                            <p class="price">RS. <?php echo $product['price']; ?></p>
                            <form method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <button type="submit" name="buy" class="btn btn-dark">Buy Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
