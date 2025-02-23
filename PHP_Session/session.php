<?php
session_start();
if(isset($_SESSION['username'])){
    $user_name = $_SESSION['username'];
    require_once(db.php);
    $cmd = 'SELECT * FROM users WHERE username='$user_name'';
    $result= $conn->query($cmd);
    $users=$result->fetch_assoc();
    $uname =$users['username'];
}

else
{
    header('location: login.php');
}