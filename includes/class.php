<?php 
    class NewClass extends ParentClass{
        //PROPERTIES AND METHODS GOES HERE
        // public $info = "This is some info";

        public function name(){
            return $this->name;
        }

        public $data = "I'm property from NewClass from class.php";
        public function setNewProperty($newData){
            $this->data = $newData;
        }


        public function getProperty(){
            return $this->data;
        }

        //WHEN OUR CLASS STOP RUNNING THIS FUNCTION WILL RUN
        public function __destruct(){
            echo "<br/> This is the end of the class";
        }

    }


    // $object = new NewClass;
    // var_dump($object);
?>