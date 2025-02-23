<?php
// update_user.php
header('Content-Type: application/json');
$conn =new Mysqli('localhost','root','','abhishek');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
$name = $data->name;
$email = $data->email;
$age = $data->age;

$sql = "UPDATE users SET name='$name', email='$email', age=$age WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("message" => "User updated successfully"));
} else {
    echo json_encode(array("message" => "Error: " . $conn->error));
}

$conn->close();
?>