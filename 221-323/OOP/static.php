<?php
    class A{
        static public function test(int $x){
            return "x = $x";
        }
    }

    // echo A::test(5);
    class User{
        private $name;
        private $role;

        public function __construct(string $role, string $name){
            $this->name = $name;
            $this->role = $role;
        }

        static public function createAdmin(string $name){
            return new self("admin", $name);
        }
}

// $admin = new User("admin", "Ivan");

// var_dump(User::createAdmin("Ivan"));

class B{
     public static $x;

     public function getX(){
        return self::$x;
     }
}

B::$x = 5;
$b = new B;
// echo $b->getX();

class Human{
    static public $count;

    public function __construct(){
        self::$count++;
    }

    public function getCount(){
        return self::$count;
    }
}

$man1 = new Human;
$man2 = new Human;
$man3 = new Human;
$man4 = new Human;
$man5 = new Human;
echo "Людей уже ". $man1->getCount();