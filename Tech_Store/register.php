<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        /* Inline styles to ensure proper spacing */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo img {
            height: 50px;
        }
        .search-bar input {
            padding: 5px;
            width: 200px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        main {
            margin-top: 100px; /* Adjust this value to move content down */
            padding: 20px;
        }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; /* Adjust as needed */
        }
        .register-container {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
            margin-bottom: 20px;
            font-size: 2em;
            text-align: center;
        }
        .register-container label {
            display: block;
            margin-bottom: 5px;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background-color: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        .register-container button:hover {
            background-color: #e65c50;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
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
        <div class="form-container">
            <div class="register-container">
                <h2>Create Account</h2>
                <form action="register_process.php" method="POST">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required><br>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required><br>
                    <button type="submit">Register</button>
                </form>
                <p><a href="login.php">Already have an account? Login here.</a></p>
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <p>&copy; 2024 Tech_Nerds. All rights reserved.</p>
    </footer>
</body>
</html>
