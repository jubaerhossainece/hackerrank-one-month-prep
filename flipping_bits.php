<?php
function flippingBits($n)
{
    // Write your code here

    $numbers = [];
    return ~$n & 0xffffffff;
    // foreach($n as $num){
    //     $numbers[] = ~$num & 0xffffffff;
    // }
    // return $numbers;

}
?>