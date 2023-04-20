<?php

    class A{
        public function method1(){
           return $this->method2();
        }

        public function method2(){
            return "A";
        }
    }

    class B extends A
    {
        public function method2(){
            return "B";
        }
    }
    // echo "ok";
    $a = new A;
    $b = new B;

    echo $b->method1();

    // class A{
    //     public function sayHello(){
    //         return "hello, I`m A!<br>";
    //     }
    // }

    // class B extends A 
    // {
    //     public function sayHello(){
    //         // return "hello, I`m B!<br>";
    //         return parent::sayHello()."It was joke, I`m B :)";
    //     }
        
    // }

    // $a = new A;
    // // print_r($a instanceof A);

    // $b = new B;
    // // print_r($b instanceof A);
    // // print_r($a instanceof B);

    // echo $a->sayHello();
    // echo $b->sayHello();



