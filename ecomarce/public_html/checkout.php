<?php
session_start();

// Clear the cart after successful checkout
$_SESSION['cart'] = [];

echo "<h2>Thank you for your purchase!</h2>";
echo "<p>Your order has been placed successfully.</p>";
echo "<a href='main.php'>Continue Shopping</a>"