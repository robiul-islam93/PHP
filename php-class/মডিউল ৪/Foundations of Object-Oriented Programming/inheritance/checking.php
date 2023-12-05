<?php

require('./amount.php');

class checkingAccount extends amount{
public function Transfer($amount){
    echo "Transfaring $amount From checking Account <br>";
}
}

$checkingAccount = new checkingAccount();

$checkingAccount->Deposite(100);
$checkingAccount->Withdrow(50);
$checkingAccount->Transfer(50);