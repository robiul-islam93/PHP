<?php


// Task 1: String Manipulation: Solution

$text = "The quick brown fox jumps over the lazy dog.";

function StringManipulation($text){
    $lowercase = strtolower($text);
    $result = str_replace("brown","red",$lowercase);
    echo "$result";
}
StringManipulation($text);
?>




