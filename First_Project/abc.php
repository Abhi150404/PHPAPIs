<?php
$n=121;
 $r=0;
 $s=0;
 $t=$n;
while(floor($n)){
    $r=$n%10;
    $s=$s*10+$r;
    $n=$n/10;
}
if($s==$t){
    echo ' this is a Palindome Number';
}
else{
    echo 'this is not Palindrome Number';
}






