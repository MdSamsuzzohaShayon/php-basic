<?php

class ParentClass{
    private $name = "hay there";
    public $error = "this is the class called ".__CLASS__."!";

    public function name(){
        return $this->name;
    }


    //Construct And Deconstruct Methods
    //WE HAVE TO WEITE __construct WE CAN'T CHANGE
    public function __construct(){
        echo "<br/>";
        echo "Parent class from ParentClass.php has been Instantiated";
    }

    public function __toString(){
        echo "toString method";
        return $this->error;
    }

    public function print(){
        echo "<br/> Printing";
    }
}

?>