<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech_Nerds</title>
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

    <div class="hero-banner">
        <div class="hero-banner-background"></div>
        <div class="hero-banner-content">
            <img src="images/christmas_discount.jpg" alt="Christmas Discount">
            <h1>Seasonal Discounts!</h1>
            <p>Get up to 50% off on selected tech products this Christmas!</p>
            <a href="product_lists.php" class="button">Shop Now</a>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h2>Featured Products</h2>
            <div class="products">
                <div class="product">
                    <img src="images/product1.jpg" alt="Nitro 5">
                    <h3>Nitro 5</h3>
                    <a href="product_details.php?id=1" class="button">View Details</a>
                </div>
                <div class="product">
                    <img src="images/product2.jpeg" alt="Asus TUFF">
                    <h3>Asus TUFF</h3>
                    <a href="product_details.php?id=2" class="button">View Details</a>
                </div>
                <div class="product">
                    <img src="images/product3.jpeg" alt="Tablet 1">
                    <h3>Tablet 1</h3>
                    <a href="product_details.php?id=3" class="button">View Details</a>
                </div>
                <div class="product">
                    <img src="images/product4.jpeg" alt="iPad 4 Pro">
                    <h3>iPad 4 Pro</h3>
                    <a href="product_details.php?id=4" class="button">View Details</a>
                </div>
                <div class="product">
                    <img src="images/product5.jpeg" alt="RTX 3060">
                    <h3>RTX 3060</h3>
                    <a href="product_details.php?id=5" class="button">View Details</a>
                </div>
                <div class="product">
                    <img src="images/product6.jpeg" alt="RTX 4090">
                    <h3>RTX 4090</h3>
                    <a href="product_details.php?id=6" class="button">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <h2>About Tech_Nerds</h2>
            <p>Tech_Nerds is your go-to place for all the latest and greatest in tech gadgets. We provide top-notch products with unbeatable prices. Check out our featured products and stay tuned for exciting deals!</p>
            <div class="social-media">
                <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            </div>
        </div>
    </footer>
</body>
</html>
