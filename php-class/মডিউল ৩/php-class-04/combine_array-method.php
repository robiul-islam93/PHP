<?php

// array_key value show

$details=['Name'=>"Md Robiul Islam",'Last Name'=>"Robi",'Age'=>"20"];

$key=array_keys($details);
echo "<h3>array_key value show</h3>";
print_r($key);

echo "<br>";
echo "<br>";


// array_combine method in php

$key = ['sector','id','hobbi'];
$value = ["Web Development","002","Coding"];

echo "<h3>array_combine method</h3>";
$combine = array_combine($key,$value);
print_r($combine);

echo "<br>";
echo "<br>";



//fill_array  fill an array with value

$fill = array_fill(0,4,"CodeNextIT");
echo"<h2>fill an array with value</h2>";
print_r($fill);

echo "<br>";
echo "<br>";


// array_push adds one or more elements to the end  of an array

$array_push = ['Imtiaz Vaiyo','Ismail Vai'];
array_push($array_push, "Rahat","Robi");

echo "<h2>array_push adds one or more elements to the end  of an array</h2>";
print_r($array_push);

echo "<br>";
echo "<br>";


// array_pop remove the last element form an array

$array_pop = ['Imtiaz Vaiyo','Ismail Vai'];
array_pop($array_pop);
echo "<h2>array_pop remove the last element form an array</h2>";
print_r($array_pop);

echo "<br>";
echo "<br>";


// array_unshift adds one more element to the beginning for an array

$array_unshift = ["Rahat","Robi"];
array_unshift($array_unshift, 'Imtiaz Vaiyo','Ismail Vai');

echo "<h2>array_unshift adds one more element to the beginning for an array</h2>";
print_r($array_unshift);

echo "<br>";
echo "<br>";


// array_shift remove the first element form an array

$array_shift = ["Ismail Vai", "Imtiaz Vaiyo","Rahat","Robi"];
array_shift($array_shift);

echo "<h2>array_shift remove the first element form an array</h2>";
print_r($array_shift);

echo "<br>";
echo "<br>";


// array_splice() - remove a portion of the array and replaces it with something else

$fruts = array('apple','orange','mango','cherry');
array_splice($fruts,1,2,["Avocado","Peyara"]);
echo "<h2> array_splice() - remove a portion of the array and replaces it with something else</h2>";
print_r($fruts);

echo "<br>";
echo "<br>";


// array_slice() - extracts a portion of the array

$frut = array('apple','orange','mango','cherry');
array_splice($frut,1,2);
echo "<h2> array_slice() - extracts a portion of the array</h2>";
print_r($frut);
