<?php

abstract class AbstractClass{
    abstract public function getValue();

    public function printValue(){
        echo $this->getValue();
    }
}

class ClassA extends AbstractClass{
    private $value;

    public function __construct(int $value){
        $this->value = $value;
    }

    public function getValue(){
        return $this->value;
    }
}

$a = new ClassA(33);
$a->printValue();
// $a= new AbstractClass ошибка
