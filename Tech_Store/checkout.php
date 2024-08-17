<?php
include 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $total = $_POST['total'];

    $sql = "INSERT INTO orders (user_id, total) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("id", $user_id, $total);
    $stmt->execute();

    $order_id = $stmt->insert_id;

    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $sql = "SELECT price FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $price = $result['price'];

        $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiid", $order_id, $product_id, $quantity, $price);
        $stmt->execute();
    }

    unset($_SESSION['cart']);
    header('Location: order_confirmation.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Online Tech Store</title>
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

    <h2>Checkout</h2>
    <form action="checkout.php" method="post">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <?php
            $total = 0;
            foreach ($_SESSION['cart'] as $product_id => $quantity) {
                $sql = "SELECT name, price FROM products WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $product_id);
                $stmt->execute();
                $result = $stmt->get_result()->fetch_assoc();

                $name =  $result['name'];
                $price = $result['price'];
                $subtotal = $price * $quantity;
                $total += $subtotal;
            ?>
            <tr>
                <td><?php echo htmlspecialchars($name); ?></td>
                <td><?php echo htmlspecialchars($quantity); ?></td>
                <td>$<?php echo htmlspecialchars(number_format($price, 2)); ?></td>
                <td>$<?php echo htmlspecialchars(number_format($subtotal, 2)); ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="3">Total</td>
                <td>$<?php echo htmlspecialchars(number_format($total, 2)); ?></td>
            </tr>
        </table>
        <input type="hidden" name="total" value="<?php echo htmlspecialchars($total); ?>">
        <button type="submit">Place Order</button>
    </form>

    <footer>
        <p>&copy; 2024 Online Tech Store</p>
    </footer>
</body>
</html>
