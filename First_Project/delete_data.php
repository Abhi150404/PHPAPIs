<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
require_once('db.php');
if($conn->connect_error){
    die($conn->connect_error);
} 
else{

$cmd = 'DELETE FROM adhar_card WHERE u_id='$stu_id' ';
if($conn->query($cmd)==true){

    header('location:reg.php?token=123456789');
}
else{
    echo $conn->error;
}


}
}
else{
    echo "invalid Request...<a href='reg.php'>Go To Reg Page<a/>";
}