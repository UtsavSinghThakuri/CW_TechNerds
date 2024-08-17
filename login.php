<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
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
                <a href="products.php">Products</a>
                <a href="login.php">Login</a>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="login-container">
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Create one here</a></p>
        </div>
    </main>
    
    <footer class="footer">
        <p>&copy; 2024 Tech_Nerds. All rights reserved.</p>
    </footer>
</body>
</html>
