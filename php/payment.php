<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve product details from the POST request
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Display payment details
    echo "<h1>Payment for $product_name</h1>";
    echo "<p>Product ID: $product_id</p>";
    echo "<p>Price: RS. $product_price</p>";

    // Add payment gateway or further processing here
    echo '<a href="Buynow.php" class="btn btn-success">Confirm Payment</a>';
} else {
    echo "<p>Invalid request</p>";
}
?>
