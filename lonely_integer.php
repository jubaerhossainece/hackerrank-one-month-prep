<?php
function lonelyinteger($a)
{
    // Write your code here
    $result = 0;

    foreach ($a as $num) {
        $result ^= $num;
    }

    return $result;
}
