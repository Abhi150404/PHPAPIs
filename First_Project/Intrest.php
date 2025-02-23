<?php
$b = $_POST['a1']; // super global variable
$c = $_POST['a2'];
$d = $_POST['a3'];
$s = ($d+$c+$b);
header('location:EMICal.html?ab='.$s);
?>