<?php

// Task 1: Looping with Increment using a Function

echo "<h2> Looping with Increment using a Function</h2>";

function number($start , $end, $count){
    for($i=$start; $i<=$end; $i=$i+$count){
        echo" $i ,";
    }
}

number(2,20,2); // php argument

?> 
