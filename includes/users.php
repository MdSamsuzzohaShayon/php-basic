<?php 
class Users{
    public $first = "Leonel";
    public $last; //NOT NECESSARY TO GIVE THE VALUE
    public $hairColor = "gray";
    public $eyeColor = "Black";

    public function __construct($first, $last, $hairColor, $eyeColor){
        $this->first = $first;
        $this->last = $last;
        $this->hairColor = $hairColor;
        $this->eyeColor = $eyeColor;
    }
    public function getFullName(){
        return $this->first." ".$this->last;
    }
    public function __destruct(){

    }
}

?>