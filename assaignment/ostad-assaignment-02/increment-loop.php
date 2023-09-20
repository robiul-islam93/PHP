<?php

// Task 1: Looping with Increment using a Function

echo "<h2> Looping with Increment using a Function</h2>";


echo "<h4>for loop function</h4>";
function number($start , $end, $count){
    for($i=$start; $i<=$end; $i=$i+$count){
        echo" $i ,<br>";
    }
}

number(2,20,2); // php argument
?>

<?php
// while loop
echo "<h4>while loop function</h4>";

function number1($start , $end, $count){

    $i=$start;
    while( $i<=$end){
        $i=$i+$count;
        echo" $i , <br>";
    } 
}

number1(2,20,2); // php argument


?>


<?php

// do while loop
echo "<h4>do while loop function</h4>";
function number2($start , $end, $count){

    $i=$start;
    do{
        $i=$i+$count;
        echo" $i ,";
    }while( $i<=$end);

}

number2(2,20,2); // php argument

?> 
