<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATN Sports World</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="product.html">ATN Sports World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <button class="btn btn-success dropdown-toggle" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="football.html">Football</a></li>
                            <li><a class="dropdown-item" href="basketball.html">Basketball</a></li>
                            <li><a class="dropdown-item" href="tennis.html">Tennis</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search in Sports World" aria-label="Search">
                    <button class="btn btn-outline-success me-2" type="button" onclick="window.location.href='login.html'">Login</button>
                    <button class="btn btn-success me-2" type="button" onclick="window.location.href='register.html'">Sign Up</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="text-center my-4">ATN Sports World</h1>
    <div class="container mt-4">
        <div class="row g-3">
            <!-- Example Product Card -->
            <?php
            // Example products array
            $products = [
                ["id" => 1, "name" => "Hat", "price" => 2100, "image" => "images/whitehat.webp"],
                ["id" => 2, "name" => "Suncream", "price" => 1990, "image" => "images/suncream.jpeg"],
                ["id" => 3, "name" => "Knee Guard", "price" => 1790, "image" => "images/kneeguard.jpeg"]
            ];

            foreach ($products as $product) {
                echo '<div class="col-md-3">';
                echo '<div class="card">';
                echo '<img src="' . $product["image"] . '" class="card-img-top" alt="' . $product["name"] . '">';
                echo '<div class="card-body text-center">';
                echo '<h5 class="card-title">' . $product["name"] . '</h5>';
                echo '<p class="price">RS. ' . $product["price"] . '</p>';
                echo '<form action="payment.php" method="POST">';
                echo '<input type="hidden" name="product_id" value="' . $product["id"] . '">';
                echo '<input type="hidden" name="product_name" value="' . $product["name"] . '">';
                echo '<input type="hidden" name="product_price" value="' . $product["price"] . '">';
                echo '<button type="submit" class="btn btn-dark">Buy Now</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
