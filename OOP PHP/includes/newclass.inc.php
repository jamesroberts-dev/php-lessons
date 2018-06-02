<?php

class NewClass extends ParentClass {   // Child of ParentClass

    //Properties of the class
    public $info = "this is some information";
    public $data = "I am a property";
    public $error = "This is the class called ".__CLASS__."";  // Class name
    public static $static = 0;
    //Construct
    public function __construct(){
        echo "This is class has been instantiated"."<br>";
    }
    // Destructor (Used to delete object when finished)
    public function __destruct(){
        echo "This is the end of the class";
    }

    public function __toString()
    {
         return $this -> error;
    }

    //Static method
    public static function staticMethod(){
        return self::$static;
    }
    //Methods of the class
    public function name () {
        return $this->name;
    }

    public function setNewProperty($newData) {
        $this->data = $newData;
    }

    public function getProperty () {
        return $this -> $data;
    }
}

    // Instantiate the class
    $object = new NewClass;
    var_dump($object);   // Prints all the information of the class

?>