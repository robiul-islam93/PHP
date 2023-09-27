
<?php

$numbers = range(1,10);
function oddNumber($odd){
    return array_filter($odd, function($oddnumber){
        return $oddnumber % 2 != 0;
    });
}
$result =  oddNumber($numbers);
print_r($result);

?>



