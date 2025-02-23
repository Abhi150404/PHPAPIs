<?php
require("db.php");
require_once('connection.php');
if($conn->connect_error){
    die($conn->connect_error);
}
else{
    $due_date = $_POST['due_date'];
    $uid =  getadharno();
   $u_name = $_POST['uname'];
    $u_pwd = getpassword();
    $u_number =$_POST['mobile'];
    $DOB=$_POST['dob'];
    //$user_zenderM = $_POST['M'];
   // $user_zenderF =$_POST['F'];

   // $cmd = "INSERT INTO user_info VALUES('$uid','$u_name','$u_number','$u_pwd')";
    $cmd = "INSERT INTO user_info VALUES('$uid','$u_name','$u_number','$u_pwd','$DOB')";
    if($conn->query($cmd)==true){
        header('location:Register.php?token=87654567854');
        
    }
    else{
        echo $conn->error;
    }
}