<?php
class object_oriant{
    public $name = "Md Robiul Islam Robi";
    public function evenOdd($number){

            if($number %2==0){
                echo "$number Number Is Even <br>";
            
            }else{
                echo "$number Number Is Odd <br>";
            }
        }
    }

$object = new object_oriant();
$object -> evenOdd(10);