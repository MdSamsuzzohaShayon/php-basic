<?php 
 class Another{
     public static $static = 10;


     public static function staticMethod(){
         //BECAUSE THIS IS STATIC PROPERTY WE CAN'T DO THIS WAY $this->static
         return self::$static;
     }
 }

?>