<?php
date_default_timezone_set("Asia/kolkata");
//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
//The example below shows how to use some of the elements in $_SERVER:
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['REQUEST_METHOD'];
echo $_SERVER['SERVER_SOFTWARE']."<br>";

$ab =$_SERVER['REQUEST_TIME'];
print_r($ab);
echo date('Y-m-d h:i:s',$ab)."<br>";
echo $_SERVER['QUERY_STRING']."<br>";

