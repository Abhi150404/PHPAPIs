<?php
$b = $_POST['a1']; // super global variable
$s = sqrt($b);
header('location:front.php?ab='.$s);
?>