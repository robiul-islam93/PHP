

<?php

//Task 4: Fibonacci Series printing using a Function

echo "<h2>Fibonacci Series printing using a Function</h2>";
function fibonacci($number) {
    $firstNumber = 0;
    $secoundNumber = 1;
    
    for ($i = 0; $i < $number; $i++) {
        echo $firstNumber . " ";
        $result = $firstNumber;
        $firstNumber = $secoundNumber;
        $secoundNumber = $result + $secoundNumber;
    }
}

// Call the function to print the first 15 Fibonacci numbers
fibonacci(15);
?>
