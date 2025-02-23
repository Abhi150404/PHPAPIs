<?php
require_once('connection.php');
if($conn->connect_error){
    die($conn->connect_error);
} 
else{
    echo $conn->error;
}
    //     }
// $uid =  getadharno();
// $uid =  getadharno();
// $u_name = $_POST['uname'];
//  $u_pwd = getpassword();
//  $u_number =$_POST['mobile'];
//  $DOB=$_POST['dob'];

//    // $cmd = "INSERT INTO user_info VALUES('$uid','$u_name','$u_number','$u_pwd')";
//    $cmd = "INSERT INTO user_info VALUES('$uid','$u_name','$u_number','$u_pwd','$DOB')";
//     if($conn->query($cmd)==true){
//         header('location:Register.php?token=87654567854');
        
//     }
//     else{
//         echo $conn->error;
//     }
// }

function getadharno(){
    $digit ='12345678901234567890';
    return substr(str_shuffle($digit),0,5); 
    }

    function getpassword(){
        $digit1 ='1234567890';
        $str='abcdefghijklmnopqrstuvwzyz';
        $mix=$digit1.$str;
        return substr(str_shuffle($mix),0,6);
    }