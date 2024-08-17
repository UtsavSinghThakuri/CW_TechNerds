<?php
include 'config.php';
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }

    header('Location: cart.php');
}

// Fetch cart products
$cart_products = [];
if (!empty($_SESSION['cart'])) {
    $product_ids = implode(',', array_keys($_SESSION['cart']));
    $sql = "SELECT * FROM products WHERE id IN ($product_ids)";
    $cart_products = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Online Tech Store</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="product_list.php">Products</a>
            <a href="cart.php">Cart</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <h2>Your Shopping Cart</h2>
    <div class="cart">
        <?php if ($cart_products->num_rows > 0): ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
                <?php $total = 0; ?>
                <?php while ($row = $cart_products->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $_SESSION['cart'][$row['id']]; ?></td>
                        <td>$<?php echo $row['price']; ?></td>
                        <td>$<?php echo $row['price'] * $_SESSION['cart'][$row['id']]; ?></td>
                    </tr>
                    <?php $total += $row['price'] * $_SESSION['cart'][$row['id']]; ?>
                <?php endwhile; ?>
                <tr>
                    <td colspan="3">Total</td>
                    <td>$<?php echo $total; ?></td>
                </tr>
            </table>
            <a href="checkout.php">Proceed to Checkout</a>
        <?php else: ?>
            <p>Your cart is empty!</p>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; 2024 Online Tech Store</p>
    </footer>
</body>
</html>
