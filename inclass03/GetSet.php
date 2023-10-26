<?php
class GetSet {
    private $fullName;
    private $age;
    function getFullName(){
        return $this->fullName;
    }
    function setFullName($value){
        $this->fullName = $value;
    }
    function getAge(){
        return$this->age;
    }
    function setAge($value){
        $this->age = $value;
    }
}
$testObj = new GetSet();
$testObj->setFullName("Kim Thøisen");
$testObj->setAge(38);

echo $testObj->getFullName();
echo $testObj->getAge();

$sql = "INSER INTO files VALUES ".$testObj->getFullName;