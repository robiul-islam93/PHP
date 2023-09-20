<?php

// recurtion function

function recurtionDown($n){
    for($i=$n; $i>0;$i--){
        echo $i ."<br>";
    }
}


recurtionDown(10);

//recursive function

function recursiveCountDown($number){

    if($number==5){
        return;
    }
    echo $number ."<br>";

    recursiveCountDown($number - 1);
}

recursiveCountDown(15);