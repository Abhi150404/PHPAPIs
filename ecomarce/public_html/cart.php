<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
<style>
    .cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}

.cart-table th, .cart-table td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
}

.cart-table th {
    background-color: #f4f4f4;
}

.cart-summary {
    text-align: right;
    margin-top: 20px;
}

.cart-summary p {
    font-size: 18px;
    margin-bottom: 10px;
}

button {
    background-color: #ff6600;
    color: white;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
    margin-right: 5px;
}

button:hover {
    background-color: #e65c00;
}
    </style>
</head>
<body>
    <h2>Your Cart</h2>
    
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $subtotal = 0;
            $gst_rate = 0.18;
            $shipping_charge = 50;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

            if (count($cart) > 0) {
                foreach ($cart as $product) {
                    $product_total = $product['price'] * $product['quantity'];
                    $subtotal += $product_total;
                    echo "
                    <tr>
                        <td>{$product['name']}</td>
                        <td>
                            <button onclick='decreaseQuantity({$product['id']})'>-</button>
                            {$product['quantity']}
                            <button onclick='increaseQuantity({$product['id']})'>+</button>
                        </td>
                        <td>₹{$product['price']}</td>
                        <td>₹$product_total</td>
                        <td>
                            <button onclick='removeFromCart({$product['id']})'>Remove</button>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Your cart is empty</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Calculate totals
    $gst_amount = $subtotal * $gst_rate;
    $total = $subtotal + $gst_amount;
    if ($subtotal < 5000) {
        $total += $shipping_charge;
    }
    ?>

    <div class="cart-summary">
        <p>Subtotal: ₹<?php echo $subtotal; ?></p>
        <p>GST (18%): ₹<?php echo $gst_amount; ?></p>
        <?php if ($subtotal < 5000) { ?>
            <p>Shipping Charge: ₹<?php echo $shipping_charge; ?></p>
        <?php } ?>
        <p>Total: ₹<?php echo $total; ?></p>
        <button onclick="checkout()">Checkout</button>
    </div>

    <script>
        function increaseQuantity(productId) {
            // Logic to increase product quantity
            window.location.href = "update_cart.php?action=increase&id=" + productId;
        }

        function decreaseQuantity(productId) {
            // Logic to decrease product quantity
            window.location.href = "update_cart.php?action=decrease&id=" + productId;
        }

        function removeFromCart(productId) {
            // Logic to remove product from cart
            window.location.href = "update_cart.php?action=remove&id=" + productId;
        }

        function checkout() {
            // Logic for checkout (clear cart, redirect to confirmation page)
            window.location.href = "checkout.php";
        }
    </script>
</body>
</html>