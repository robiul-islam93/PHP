<?php

class amount{
    public $accountNumber;
    public $blance;

    public function Deposite($amount){
        echo "Dipositing $amount into blance <br>";
    }
    public function Withdrow($amount){
        echo "Withdrow $amount Form Amount <br>";
    }
    public function getBlance(){
         return $this->blance;
    }
}