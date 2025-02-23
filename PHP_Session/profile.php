<?php
// Start the session
session_start();

// Check if the session variable 'username' is set
if (isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'] . "!";
    echo "<br><a href='logout.php'>Logout</a>";
}
else
{
    echo "You are not logged in!";
    echo "<br><a href='login.php'>Login</a>";
}
?>