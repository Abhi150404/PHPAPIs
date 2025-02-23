<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

echo "You have been logged out!";
echo "<br><a href='login.php'>Login again</a>";
?>