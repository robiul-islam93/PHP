<?php

$filepath = "Data.txt";

if(file_exists($filepath)){
    $fileContent = file_get_contents($filepath);
    echo "<pre> $fileContent</pre>";
}else{
    echo "File Does Not Exit";
}