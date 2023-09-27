<?php

// string Information

$details = "My Name Is Robiul Islam";
echo $details;
echo "<br/>";


$name = "Robiul Islam";
echo "My Name Is $name";
echo "<br/>";


$Fruts = "Banana";
echo "I Love {$Fruts}";
echo "<br/>";

// heredoc syntex

$address= <<<ABCD

First Name: Robiul Islam
Last Name: Robi
Sector: Web Development
ABCD;

echo $address;