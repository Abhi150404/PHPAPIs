<?php
$conn = new mysqli("localhost","root","","abhishek");  
if($conn->connect_error){
    die($conn->connect_error);
} 
else{
   // $uid =  substr('USE'.str_shuffle(date('Ymdhis').mt_rand(100,999)),0,12);
  
    $u_name = 'Riya Jain';
    $u_dob ='1997-03-24';
    $u_gender= "Female";
    $u_id = getadharno();
  

    $db = "INSERT INTO adhar_card VALUES('$u_id','$u_name','$u_dob','$u_gender')";
    if($conn->query($db)==true){
        echo 'data saved';
    }
    else{
        echo $conn->error;
    }
}

function getadharno(){
$digit ='12345678901234567890';
return substr(str_shuffle($digit),0,12); 
}





