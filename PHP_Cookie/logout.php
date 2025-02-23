<?php
// Delete the cookie by setting its expiration time to a time in the past
setcookie('username', '', time() - 3600, "/");

echo "You have been logged out!";
echo "<br><a href='login.php'>Login again</a>";
?>