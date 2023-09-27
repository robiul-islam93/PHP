<?php

// Array Information Function


//count() - Counts The Number Of Elements An Array

$count = ["Open", "New Door", "of", "Possibilities With Us"];
echo "<h2>count() - Counts The Number Of Elements An Array</h2>";
echo count($count);

echo "<br>";
echo "<br>";


// sizeof() - an alias of count(). also count the number of element of an array

$sizeof = ["Open", "New Door", "of", "Possibilities With Us","CodeNext IT"];
echo "<h2>sizeof() - an alias of count(). also count the number of element of an array</h2>";
echo count($sizeof);

echo "<br>";
echo "<br>";


// array_sum() - Computs The Sum Of Value In An Array

$arraySum=[1,2,3,4,5,6,7,8,9,10];
$sum = array_sum($arraySum);
echo "<h2>array_sum() - Computs The Sum Of An Array</h2>";
echo $sum;


echo "<br>";
echo "<br>";


// array_product() - Computs The Product Of Value In An Array

$arrayProduct=[1,2,3,4,5,6,7,8,9,10];
$product = array_product($arrayProduct);
echo "<h2>array_product() - Computs The Product Of Value In An Array</h2>";
echo $product;


echo "<br>";
echo "<br>";


// in_array() - checks if a value exits in an array

$inArray=[1,2,3,4,5,6,7,8,9];
$check= in_array(3 ,$inArray);
echo "<h2>in_array() - checks if a value exits in an array</h2>";
if($check){
    echo " Found";
}else{
    echo "Not Found";
}


echo "<br>";
echo "<br>";


// is_array() - Checks if a variables is an array

$is_array=[1,2,3,4,5,6,7,8,9];
$checkVariables= is_array($is_array);
echo "<h2>is_array() - Checks if a variables is an array</h2>";
if($checkVariables){
    echo "Array Value";
}else{
    echo "Not Array Value";
}


echo "<br>";
echo "<br>";


// array_key_exit() - checks if a key exits in an array

$details= ["Name"=>"Robiul","Age"=>"21","Email"=>"robi.cnits@gmail.com"];
$keyChecks = array_key_exists("Email", $details);
echo "<h2>array_key_exit() - checks if a key exits in an array</h2>";
if($keyChecks){
echo "Array Key Found IT";
}else{
    echo "Array Key Not Found IT";
}


echo "<br>";
echo "<br>";


// array_search() - search the array for a given value and returen the first corresponding key

$searchKey= ["Name"=>"Robiul","Age"=>"21","Email"=>"robi.cnits@gmail.com"];
$searchValue = array_search("robi.cnits@gmail.com", $searchKey);
echo "<h2>array_search() - search the array for a given value and returen the first corresponding key</h2>";
if($searchValue){
echo "Array Value Found IT";
}else{
    echo "Array Value Not Found IT";
}


echo "<br>";
echo "<br>";