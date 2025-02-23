<?php
// Include database connection
include 'db.php';

// Check if the 'username' cookie is set
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];

    // Prepare SQL query to find the user
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo "Welcome back, " . $user['username'] . "!";
        echo "<br><a href='logout.php'>Logout</a>";
    } else {
        echo "User not found!";
    }
} else {
    echo "You are not logged in!";
    echo "<br><a href='login.php'>Login</a>";
}
?>