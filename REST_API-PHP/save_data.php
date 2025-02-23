<?php
include_once(db.php);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $conn = new mysqli('localhost','root','','abhishek');
$_user_id ='STD'.mt_rand(10,99).time();
    $_user_name= trim($_POST['username']);
    $_mobile_no = trim($_POST['mobileno']);
    $_dob = trim($_POST['dob']);
    $_password ='ABC'.time();
    

    if($_user_name==''){
        echo 'Enter User Name';
    }

}else if($_mobile_no==''){
    echo 'Enter Mobile No.';
}
else if ($_dob==''){
    echo 'select date of birth';
}
else{
    $_file_name=$_FILES['profile']['name'];
    $_file_temp=$_FILES['profile']['temp'];
    $_file_size=$_FILES['profile']['size'];

    $fileType = strtolower(pathinfo($_file_name,PATHINFO_EXTENSION));
    $_file_name='IMG'.time().'.'.$fileType;
    $_file_dir ='upload_file/'. basename($_file_name);

    $cmd='INSERT INTO adar_card VALUES('$_user_id','$_user_name','$_dob','$_file_name','$_password')';
    if(move_uploaded_file($file_temp , $file_dir)){
      
        if($conn->query($cmd)==true){
          echo 'ok';
            
        }
        else{
            echo $conn->error;
        }
        

    }
    else{
        echo 'file not uploaded';
    }
   }
?>

