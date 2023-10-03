<?php

$asciiNumber = " L";
$acciiResult = ord($asciiNumber);
// echo $acciiResult;


$ascciWord="I Love Allah";
for($i=0; $i<strlen($ascciWord); $i++){
    $Result = ord($ascciWord[$i]). " ";
    echo $Result;
}