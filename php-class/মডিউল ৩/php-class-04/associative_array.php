<?php

// associative array

$details= ["Name"=>"Robiul","Age"=>"21","Email"=>"robi.cnits@gmail.com"];

//simple echo array
echo $details["Name"]."<br>";


// foreach loop accociative array print
foreach($details as $key => $value){
echo "$key:  $value <br>";
}