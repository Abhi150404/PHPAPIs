<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once(db.php);
    $user_name =$_POST['username'];
    $dob =$_POST['dob'];
    $cmd='SELECT * FROM '
}
