
<?php

//Task 2: Skip Multiples of 5

echo "<h2>Task 2: Skip Multiples of 5</h2>";

for ($x = 1; $x <= 50; $x++) {
    if ($x % 5 == 0) {
       
        continue;
    }
    echo "loop encounters a multiple of 5, it should skip  <strong> $x </strong>  <br><br><br>";
}

?>
