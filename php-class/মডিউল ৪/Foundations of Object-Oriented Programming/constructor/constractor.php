<?php


class story{
    public $firstName;
    public $lastName;
    public function __construct($firstName,$lastName){
        $this->firstName=$firstName;
        $this->lastName=$lastName;
    }
}

$contstrac = new story("32 73 32 76 111 118 101 32 82 97 107 104 105","73 32 76 111 118 101 32 89 111 117 32 84 111 111 32 82 111 98 105");
 echo $contstrac->firstName;