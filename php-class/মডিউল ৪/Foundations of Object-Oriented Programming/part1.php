<?php
// class object_oriant{
//     public $name = "Md Robiul Islam Robi";
//     public function evenOdd($number){

//             if($number %2==0){
//                 echo "$number Number Is Even <br>";
            
//             }else{
//                 echo "$number Number Is Odd <br>";
//             }
//         }
//     }

// $object = new object_oriant();
// $object -> evenOdd(10);


// Twitter Class Object

class user{
    public $user;
    public $userName;
    public $followers;
}

$userobject = new user();
$userobject->user="MD Robiul Islam Robi";
$userobject->userName= "@robi.cnits";
$userobject->followers= 1000;
print_r($userobject);