<?php
include_once("db.php");
$conn= new mysqli("localhost","root","","abhishek");


$cmd='SELECT  * FROM adhar_card';
$data=array();
$result=$conn->query($cmd);
while($row=$result->fetch_assoc()){
    $data[]=$row;
}

echo json_encode($data);

?>