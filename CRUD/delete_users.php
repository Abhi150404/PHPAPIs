<?php
// Database connection

// Create connection
$conn =new Mysqli('localhost','root','','abhi');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['ids'])) {
    $ids = $_POST['ids'];
    $ids = implode(",", $ids);

    // Delete selected users from the database
    $sql = "DELETE FROM users WHERE id IN ($ids)";
    if ($conn->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}

$conn->close();
?>