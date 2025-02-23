<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query to find the user
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password (assuming passwords are hashed)
        if (password_verify($password, $user['password'])) {
            // Set the cookie if login is successful (valid for 7 days)
            setcookie('username', $username, time() + (86400), "/"); // 86400 = 1 day
            echo "Welcome, $username! You are now logged in.";
            echo "<br><a href='profile.php'>Go to your profile</a>";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>