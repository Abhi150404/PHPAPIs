<?php

if(
    $_SERVER['REQUEST_METHOD']=='POST'
    )
    {
        require_once('Connection.php');
    }

$file_ext= array('png','jpg','gif','webp');
if($conn->connect_error){
    die($conn->connect_error);
} 
else{
$uid =  getadharno();
  
   // $u_name = 'Modi';
   $user_name = $_POST['uname'];
    //$u_pwd = getpassword();
    $user_dob = $_POST["dob"];
    //$u_number ='9192919293';
    $user_zenderM = $_POST['M'];
   // $user_zenderF =$_POST['F'];
   $file_name=$_FILES['myfiles']['name'];
   $file_temp=$_FILES['myfiles']['tmp_name'];
   $file_size=$_FILES['myfiles']['size'];
   $file_size_kb=$file_size/1024;
   $file_type=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
   $new_file_name='IMG'.time().'.'.$file_type;
   $file_dir='files/'.basename($new_file_name);
   if($file_size<0){
    echo 'invalid file';
   }
   else if($file_size_kb>200){
    echo 'Please upload a file less than 200kb';
   }
   else if(!in_array($file_type,$file_ext)){
    echo 'please upload image files...';
   }
   
   else{
    if(move_uploaded_file($file_temp , $file_dir)){
        $cmd = "INSERT INTO adhar_card VALUES('$uid','$user_name','$user_dob','$new_file_name','$user_zenderM')";
        if($conn->query($cmd)==true){
            header('location:reg.php?token=87654567854');
            
        }
        else{
            echo $conn->error;
        }
        

    }
    else{
        echo 'file not uploaded';
    }
   }



   // $cmd = "INSERT INTO user_info VALUES('$uid','$u_name','$u_number','$u_pwd')";
   
}

function getadharno(){
    $digit ='12345678901234567890';
    return substr(str_shuffle($digit),0,12); 
    }