<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details | Tech_Nerds</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/logo.png" alt="Tech_Nerds Logo">
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
            <nav>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="product_lists.php">Products</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <?php
            // Fetch product ID from URL
            $product_id = $_GET['id'];

            // Example product details (in practice, fetch from database)
            $products = [
                1 => ['name' => 'Nitro 5', 'description' => 'Specifications for Nitro 5...', 'image' => 'product1.jpg'],
                2 => ['name' => 'Asus TUFF', 'description' => 'Specifications for Asus TUFF...', 'image' => 'product2.jpeg'],
                3 => ['name' => 'Tablet 1', 'description' => 'Specifications for Tablet 1...', 'image' => 'product3.jpeg'],
                4 => ['name' => 'iPad 4 Pro', 'description' => 'Specifications for iPad 4 Pro...', 'image' => 'product4.jpeg'],
                5 => ['name' => 'RTX 3060', 'description' => 'Specifications for RTX 3060...', 'image' => 'product5.jpeg'],
                6 => ['name' => 'RTX 4090', 'description' => 'Specifications for RTX 4090...', 'image' => 'product6.jpeg']
            ];

            // Display product details
            if (isset($products[$product_id])) {
                $product = $products[$product_id];
                echo '<h1>' . htmlspecialchars($product['name']) . '</h1>';
                echo '<img src="images/' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '">';
                echo '<p>' . htmlspecialchars($product['description']) . '</p>';
            } else {
                echo '<p>Product not found.</p>';
            }
            ?>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Tech_Nerds. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
