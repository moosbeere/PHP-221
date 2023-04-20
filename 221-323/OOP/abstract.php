
<?php

    abstract class AbstractClass{
        abstract protected function getValue();

        public function printValue(){
            echo "Значение {$this->getValue()}<br>";
        }
    }

    class ClassA extends AbstractClass
    {
        public $value;

        public function __construct(int $value){
            $this->value = $value+$value;
        }

       public function getValue(){
            return $this->value;
       } 
    }

    class ClassB extends AbstractClass
    {
        public $str;

        public function __construct(string $str){
            $this->str = $str;
        }

        public function getValue(){
            return $this->str;
        }
    }


    function sum($x){
        $x->printValue();
    }

    $a = new ClassA(56);
    $b = new Classb("stroka");
    // $a->printValue();

    sum($a);
    sum($b);





    //$a = new AbstractClass;ошибка 