<?php
function abc($a,$b,$d){
    $c=$a+$b+$d;
    echo "Sum=".$c."<br>";
}
abc(10,10,10);//this is diffrent program

//CI & SI calculation function

$p=5000;
$r=5;
$t=5;

function simple(){
global $p,$r,$t;
$si =($p*$r*$t)/100;
echo "Simple Intrest =".$si."<br>";
}

function compound(){
    global $p,$r,$t;
    $ac = $p* pow( (1+$r/100),$t);
    $ci = $ac-$p;
    echo "compund Intrest = ".$ci;
}

simple();
compound();
