<?php
    // class A{
    //     public function sayHello(){
    //         return 'Hello, i`m A<br>';
    //     }
    // }

    // class B extends A{
    //     public function sayHello(){
    //         return parent::sayHello().'Hello, i`m B<br>';
    //     }
    // }

    // $a = new A;
    // var_dump($a);   

    // if ($a instanceof A) echo $a->sayHello();
    // $b = new B;
    // if ($b instanceof A) echo $b->sayHello();
    // if ($a instanceof B) echo $a->sayHello(); else echo 'no';   


    class A{
        public function method1(){
            return $this->method2();
        }
        public function method2(){
            return 'A';
        }
    }

    class B extends A{
        public function method2(){
            return 'B';
        }
    }

    $a = new A;
    $b = new B;

    echo $b->method1();