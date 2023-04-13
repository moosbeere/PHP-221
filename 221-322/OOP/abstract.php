<?php

    abstract class AbstractClass{
        abstract public function getValue();
        
        public function printValue(){
            echo 'Значение '.$this->getValue();
        }
    }

    // $object = new AbstractClass;//ошибка

    class ClassA extends AbstractClass
    {
        private $value;

        public function __construct(int $value){
            $this->value = $value;
        }
        public function getValue(){
            return $this->value;
        }
    }

    $a = new ClassA(45);
    $a->printValue();