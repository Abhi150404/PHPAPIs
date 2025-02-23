<?php
// add_user.php
header('Content-Type: application/json');
$conn =new Mysqli('localhost','root','','abhishek');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$name = $data->name;
$email = $data->email;
$age = $data->age;

$sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";

if ($conn->query($sql) === TRUE) {
    echo json_encode(array("message" => "User added successfully"));
} else {
    echo json_encode(array("message" => "Error: " . $conn->error));
}

$conn->close();
?>