<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once('connection.php');
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $cmd = "SELECT * FROM admin WHERE u_name='$user_name' AND u_pwd='$password'";

    $result = $conn->query($cmd);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $user_id = $user['uid'];

        session_start();
        $_SESSION['uid'] = $user_id;
        header('Location: Retrive.php');
    } else {
        echo "Invalid login....<a href='login.php'>Go to Login Page</a>";
    }
} else {
    echo "Invalid Request....<a href='login.php'>Go to Login Page</a>";
}
?>
