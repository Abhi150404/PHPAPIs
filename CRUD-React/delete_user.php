<?php
// delete_user.php
header('Content-Type: application/json');
$conn =new Mysqli('localhost','root','','abhishek');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("message" => "User deleted successfully"));
} else {
    echo json_encode(array("message" => "Error: " . $conn->error));
}

$conn->close();
?>