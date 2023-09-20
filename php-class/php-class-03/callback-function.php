<?php

// variable scope 

// local variable function

function local(){
    $name = "Robiul  Islam ";
    echo "My Name Is " . $name ."<br>";
}

local();

// global variable function

$city= "Bangladesh";

function globalF(){
    global $city;
    echo "My Country Is" . $city ."<br>";
}

globalF();





// function details


function great($name , $city){ //function definition

    echo $city . " " . $name ."<br>"; 

}

great("Pabna", "Robiul Islam"); // function argument



// callback function in php

function addition($x ,$y){
    echo "addition $x and $y";
}

function multipulation($m , $m1){
    echo "multipulation $m and $m1";
}

// this function is callback
function process($sum , $multiple , $cb){
$cb($sum , $multiple);
}

process(30 , 50, "multipulation");



$people=[
    ['namer'=> 'A', 'gender' => 'M'],
    ['namer'=> 'B', 'gender' => 'M'],
    ['namer'=> 'C', 'gender' => 'F'],
    ['namer'=> 'D', 'gender' => 'F'],
    ['namer'=> 'E', 'gender' => 'M'],
];

function isMail($person){
if($person["gender"]=="M"){
    return true;
}
return false;

}

function isFmail($person){
    if($person["gender"]=="F"){
    return true;
    }
    return false;
}


$ismail = array_filter($people ,"isMail");

print_r($ismail);

echo "<br>";
echo "<br>";
echo "<br>";

$books= [

["id" => 1, "title" => "Harry Potter 1", "author" => "Imtiaz vai"],
["id" => 2, "title" => "Harry Potter 2", "author" => "ismail vaiyo"],
["id" => 3, "title" => "jumange", "author" => "rahat"],
["id" => 4, "title" => "Imaginary", "author" => "robi"]
    
];


function sortByAuthorName($book1,$book2){
if(strlen($book1['author']) > strlen($book2['author'])){
return 1;

}elseif(strlen($book1['author'])< strlen($book2['author'])){
    return 1;
}else{
    return 0;
}
}

usort($books, "sortByAuthorName");    
print_r($books);