<?php

// inde x array

$indexArray=["Imtiaz vaiyo","Ismail vai","Rahat","Robiul"];


// for loop
echo "<h3>for loop</h3>";
for($i=0;$i<count($indexArray);$i++){
echo "$indexArray[$i] <br>";
}

echo "<br>";
// foreach loop
echo "<h3>foreach loop</h3>";
foreach($indexArray as $item){

    echo $item ."<br>";
}






