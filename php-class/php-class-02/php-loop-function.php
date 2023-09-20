<?php
declare(strict_types=1);
// php build in function (string manupulation)(count text)

$dtext = "Alhamdulillah";

$result = strlen($dtext);
echo " php build in function Count $result. <br> <br> <br>";

// function section start line

// user define function 

function addNumber(){

    //function body start
    $a = 20;
    $b = 30;
    $sum = $a + $b;
    echo "<h2>Sum Number  </h2>$sum <br> <br>";

    //function body end

}
addNumber();

// function param (default value single / double/ multiple) start

function defultnumber($a, $b, $c, $d=50,$e =60){
    echo "<h2>function parametar And Defult function</h2> ";
    echo  $a + $b + $c +$d + $e." <br> <br>";

}

defultnumber(10,10,20);

function details($age , $city){
echo "<h3>My Age $age And My City $city</h3>";
}

details(21,"Pabna");


// php param Data Type --> Hinting funtion start

function datatype( int $roll , string $school ){

    echo "<h4>My Class Roll: $roll <br>My Scholl Name:$school</h4>";

}

datatype(244097,"Shaheed Bulbul Government College, Pabna <br><br>");

// php param Data Type --> Hinting funtion end


// function param (default value single / double/ multiple) end


// param type null value start


echo "<h2>param type null value <br></h2>";
function nullvalue( ? string $nulltext){

echo $nulltext;
}

 nullvalue("CodeNextIT <br><br>");

 nullvalue(null);

// param type null value end


// variadic function start (... sprid function/1paramater and mulltiple value check in array type)


function variadic(... $number){

    echo "<h1>This is a variadic function</h2>";
    echo $number[3];
    
}
variadic(20,40,60,50,30);
echo "<br><br>";

// variadic function end


// anonymous function start (name bihin function)

//row anonymous function

echo "<h2>anonymous function</h2>";

(function(){
$a = 20;
$b = 30;
echo "row anonymous function";
echo $a + $b ."<br>";
}

)();

//annymous function assign

$assign = function(){

    $a = 250;
    $b = 50;
    echo "annymous function assign <br>";
    echo $a + $b;
        
};

$assign();

// anonymous function end (name bihin function)



// arrow function start(simple Calcuration) 

echo "<h1>arrow function</h1>";

$arrowsum = fn($x,$y)=>$x+$y;
echo $arrowsum(599,699);
echo "<br><br>";


// arrow function end(simple Calcuration) 


// function return Type start

function avrg($r,$e){
    $res = ($r + $e)/2;

    return $res;
}
 echo avrg(20,30)+10;
 echo "<br><br><br><br><br><br><br>";

// function section end line



// Loop section start line

echo "<h1>Loop Function start</h1>";

//for loop(entrycontrol loop)
echo "<h3>for loop function</h3>";
for($f=0;$f<10;$f=$f+1){
    echo $f."<br>";
    echo "<br><br>";
}


//while loop and do while loop(exitcontrol loop)

//while loop(exitcontrol loop)
echo "<h3>while loop function</h3>";
$w=1;

while($w<20){
echo $w."<br>";
$w=$w+2;
}

//do while loop (exitcontrol loop)

echo "<h3>do while loop function</h3>";

  $d = 0;

  do{
    echo $d."<br>";
    $d=$d+3;
  }while($d<30);