

<?php

//Task 3: Break on Condition

echo "<h2>Break on Condition</h2>";

$number1 = 0;
$number2 = 1;

for ($i = 0; $i < 10; $i++) {
    // Calculate the next Fibonacci number
    $result = $number1 + $number2;

    // Check if the Fibonacci number is greater than 100
    if ($i > 100) {
        break;
    }

    echo "Fibonacci($i) = $result <br>";

    // Update variables for the next iteration
    $number1 = $number2;
    $number2 = $result;
}



?>

