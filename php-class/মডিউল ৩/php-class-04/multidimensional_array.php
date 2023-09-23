<?php

// multidimensional Arrray

$multipleArray = [

["first name" => "Imtiaz Ahmed","Last Name" => "Shawon", "Email" => "imtiaz.cnits@gmail.com","Age" => "26"],
["first name" => "Ismail Hossain","Last Name" => " Naiem", "Email" => "ismail.cnits@gmail.com","Age" => "28"],
["first name" => "Rahat","Last Name" => "Malitha", "Email" => "rahat.cnits@gmail.com","Age" => "20"],
["first name" => "Robiul Islam","Last Name" => "Robi", "Email" => "robi.cnits@gmail.com","Age" => "21"],

];

// echo $multipleArray[1]["first name"];
// echo $multipleArray[1]["Last Name"];

foreach($multipleArray as $allItem){

    foreach($allItem as $key => $value){
        echo "$key : $value <br/>";
        }
    


    }