<?php
session_start();
if(!isset($_SESSION['uid']))
{
    $admin_id = $_SESSION['uid'];
    require_once('connection.php');
    $cmd = "SELECT * FROM user_info WHERE uid='$admin_id'";
    $result = $conn->query($cmd);
    $users = $result->fetch_assoc();
    $user_mobile = $users['mobile'];
}
else
{
    header('location:login.php');
}
?>