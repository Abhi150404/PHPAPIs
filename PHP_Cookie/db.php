<?php
$conn =new Mysqli('localhost','root','','abhi');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>