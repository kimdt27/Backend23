<?php
class Vistest{
    public $one = "I'm public";
    private $two = "I'm private";
    protected $three = "I'm protected";

    function __construct(){
        echo $this->one."<br>";
        echo $this->two."<br>";
        echo $this->three."<br>";
    }

    public function change($two2, $three2){
        $this->two = $two2;
        $this->three = $three2;
        echo $this->one."<br>";
        echo $this->two."<br>";
        echo $this->three."<br>";
    }
}

$vTest = new Vistest();
var_dump($vTest);
$vTest->one = "YOLO!!!!!";
echo $vTest->one;

$vTest->change("YAY1","YAY2");
var_dump($vTest);

$vTest2 = new Vistest();
