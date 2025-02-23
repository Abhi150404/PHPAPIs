<?php

date_default_timezone_set('Asia/kolkata');
echo date('y')."<br>"; // last 2 digit of Year
echo date('Y')."<br>"; // Full Year
echo date('m')."<br>"; //Number of currunt Month
echo date('M')."<br>"; //First 3 letters of Month
echo date('F')."<br>"; // Month in Letters
echo date('d')."<br>"; //date
echo date('D')."<br>"; //first 3 digit of day
echo date('l')."<br>"; // day name in letters
//echo date('L')."<br>";
echo date('a')."<br>"; //AM/PM
echo date('h')."<br>"; //hour
echo date('i')."<br>";  //minutes
echo date('s')."<br>"; // seconds
echo date('p')."<br>";//timezone

echo  date('F Y,d l,h:i:s a')."<br>";

//  Associative Array & Index Array in PHP
$ab=array("Abhishek","AKSHAY","mOHOT","Rohit","Kohli");

//print_r($ab)."<br>";
shuffle($ab)."<br>";
$ab = array_reverse($ab);
foreach($ab as $i){
    echo $i."<br>";
} 
echo "<br>";

$cd = array(
    array("Name"=>"Amandeep","City"=>"Noida","Class"=>"BCA"),
    array("Name"=>"Rajiv","City"=>"Delhi","Class"=>"Btech"),
    array("Name"=>"Sumit","City"=>"Noida","Class"=>"MTECH"),
    array("Name"=>"Akash","City"=>"Ghaziabad","Class"=>"MCA"),
    array("Name"=>"Amandeep","City"=>"Noida","Class"=>"BCA"),
    array("Name"=>"Rajiv","City"=>"Delhi","Class"=>"Btech"),
    array("Name"=>"Sumit","City"=>"Noida","Class"=>"MTECH"),
    array("Name"=>"Akash","City"=>"Ghaziabad","Class"=>"MCA"),
    array("Name"=>"Amandeep","City"=>"Noida","Class"=>"BCA"),
    array("Name"=>"Rajiv","City"=>"Delhi","Class"=>"Btech"),
    array("Name"=>"Sumit","City"=>"Noida","Class"=>"MTECH"),
    array("Name"=>"Akash","City"=>"Ghaziabad","Class"=>"MCA"),
);

echo $cd[0]['Name']." ";
echo $cd[0]['City']." ";
echo$cd[0]['Class']."<br>";

foreach($cd as $j){
    echo $j['Name']."  ";
    echo $j['City']."  ";
    echo $j['Class']."<br>";    
}


          

