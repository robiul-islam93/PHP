<?php

// Array Transformation function







// array_map() - applies a callback function to the elements of one or more arrays.









//array_filter() - Filters elements of an array usign callback functio.





//array_merge() -Merges one or more arrays.

$arr1 =[1,2,3,4,5];
$arr2 =[6,7,8,9,10];
$arr3 =[11,12,13,14,15];
$mergeResult = array_merge($arr1,$arr2,$arr2);
echo "<h2>array_merge() -Merges one or more arrays.</h2>";
print_r($mergeResult);


echo "<br/>";
echo "<br/>";


//array_replace() - replaces values from one array to another.

$details =array("Md Robiul Islam", "Robi");
$newItem = array(0=>"Imtiaz Ahmed", 1=>"Shawon");
$replaceResult = array_replace($details,$newItem);
echo "<h2>array_replace() - replaces values from one array to another.</h2>";
print_r($details);
echo"<br/>";
echo"<br/>";
print_r($replaceResult);


echo "<br/>";
echo "<br/>";

// array_flip() - Exchanges all keys with their associated values in an array


$details = ['Name' => "Md Robiul Islam", 'Last Name' => "Robi", 'Age' => "20"];
$arrayFlip = array_flip($details);
echo "<h2>array_flip() - Exchanges all keys with their associated values in an array</h2>";
print_r($arrayFlip);


echo "<br/>";
echo "<br/>";

// array_column() - return the value form a single colum of the input array


$multipleArray = [

    ["first name" => "Imtiaz Ahmed", "Last Name" => "Shawon", "Email" => "imtiaz.cnits@gmail.com", "Age" => "26"],
    ["first name" => "Ismail Hossain", "Last Name" => " Naiem", "Email" => "ismail.cnits@gmail.com", "Age" => "28"],
    ["first name" => "Rahat", "Last Name" => "Malitha", "Email" => "rahat.cnits@gmail.com", "Age" => "20"],
    ["first name" => "Robiul Islam", "Last Name" => "Robi", "Email" => "robi.cnits@gmail.com", "Age" => "21"],
];

echo "<h2>array_column() - return the value form a single colum of the input array</h2>";

$firstName = array_column($multipleArray, 'first name');
print_r($firstName);
