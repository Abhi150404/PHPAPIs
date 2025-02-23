<?php
// Start the session
session_start();

include 'db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') 

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query to find the user
    $cmd = 'SELECT * FROM users where username='$username' AND pass='$password''; 
    $result =$conn->query(query: $cmd);
    if($result->num_rows>0){
    $users = $result->fetch_assos();
    $user = $users['username'];
    session_start();
    $_SESSION['username']=$user_name;
    header('location: Register.php');
}
    else{
    echo 'Invalid login <a href='Register.php'>Go To Login Page</a>';
    }

    else{
    echo 'Invalid login <a href='Register.php'>Go To Login Page</a>';
    }
    



?>


