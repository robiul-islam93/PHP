<?php

require('./checking.php');

class premiumAccount extends checkingAccount{
   public $munimumBlance = 1000;

}

$premiumAccount = new premiumAccount();

echo $premiumAccount->munimumBlance ."<br>";

echo $premiumAccount->Deposite(2000);