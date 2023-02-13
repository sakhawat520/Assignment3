<?php
$number=7;
function evenOdd($number){
    if($number %2 == 0){
        return" The number is even";
    }else{
        return" The number is odd";
    }
}
echo evenOdd($number);
