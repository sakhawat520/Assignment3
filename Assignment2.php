<?php
$startNumber=1;
$endNumber= 100;
$secendNumber= 2;
$distance= $secendNumber - $startNumber; 
$result=0;
for($number=$startNumber; $number<=$endNumber; $number+=$distance){
    
   $result +=$number;
};
echo $result;