<?php
require_once('Connection.php');
if($conn->connect_error){
    die($conn->connect_error);
} 
