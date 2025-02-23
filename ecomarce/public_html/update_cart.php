<?php
session_start();

if (isset($_GET['action']) && isset($_GET['id'])) {
    $productId = $_GET['id'];
    
    if ($_GET['action'] == 'increase') {
        $_SESSION['cart'][$productId]['quantity'] += 1;
    } elseif ($_GET['action'] == 'decrease') {
        if ($_SESSION['cart'][$productId]['quantity'] > 1) {
            $_SESSION['cart'][$productId]['quantity'] -= 1;
        } else {
            unset($_SESSION['cart'][$productId]);
        }
    } elseif ($_GET['action'] == 'remove') {
        unset($_SESSION['cart'][$productId]);
    }
}

header("Location: cart.php");