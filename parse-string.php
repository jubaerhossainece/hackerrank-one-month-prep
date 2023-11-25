<?php


function matchingStrings($strings, $queries)
{
    // Create an associative array named $count to 
    // track the occurrences of each  string in 
    // the $strings array.
    $count = [];
    foreach ($strings as $string) {
        if (array_key_exists($string, $count)) {
            $count[$string]++;
        } else {
            $count[$string] = 1;
        }
    }
    // Create a PHP associative array - $result to capture 
    // the occurrence frequency of each string from the 
    // $queries array in relation to the $strings array
    $result = [];

    foreach ($queries as $key => $query) {
        $result[$key] = $count[$query] ?? 0;
    }
    return $result;
}
