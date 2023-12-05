<?php

class Attandenc{
    private static int $count= 0;

    public function __construct(){
        self::$count++;
    }
    public static function getcount(){
        return self::$count;
    }
}

$attandencOb= new Attandenc();
$attandenc= new Attandenc();
$attandenc= new Attandenc();

print_r(Attandenc::getcount());
