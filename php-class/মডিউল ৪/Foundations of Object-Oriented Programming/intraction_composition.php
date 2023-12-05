<?php

// intraction
class songs{
    public $songId;
    public $title;
}


$numb = new songs();
$numb->songId="1";
$numb->title="Arab Atahe Didar se tere";

// echo $numb->title;
// print_r($numb);

class playlist{
    public $name;
    public $song=[];

    public function addsongs($song){
        $this->song=$song;
    }
}

$rockList = new playlist();

$rockList ->name="Rock";
$rockList ->addsongs($numb);

print_r($rockList);


