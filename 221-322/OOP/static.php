<?php
    // class A{
    //     static public function test($x){
    //         return "x = $x";
    //     }
    // }

    // echo A::test(24);

    class User{
        private $role;
        private $name;

        public function __construct(string $role, string $name){
            $this->role = $role;
            $this->name = $name;
        }

        static public function createAdmin(string $name){
            return new self('Admin', $name);
        }
    }

    $admin = User::createAdmin('Ivan');
    // var_dump($admin);

    class Human{
        static private $count = 0;

        public function __construct(){
            self::$count++;
            // $this->count;
        }
        static public function getCount(){
            return self::$count;
        }
    }
    $a = new Human;
    $a1 = new Human;
    $a2 = new Human;
    $a3 = new Human;
    echo "Людей уже ". Human::getCount();