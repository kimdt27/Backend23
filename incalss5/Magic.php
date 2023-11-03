<?php
class Magic{

    private $data = "YAY!";

    public function __set($name, $value){
        echo "Setting $name to $value";
        $this->$name = $value;
    }

    public function __get($name){
        echo "Getting $name";
        return $this->$name;
    }
}

$OBJ = new Magic();
$OBJ->data = "YAYAYAYA";
$OBJ->hidden = "new stuffffffff!";
echo $OBJ->data;

echo $OBJ->hidden;