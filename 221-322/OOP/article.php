<?php
    class User{
        private $name;
        public function __construct(string $name){
            $this->name = $name;
        }
        public function getName():string
        {
            return $this->name;
        }
    }

    class Article{
        private $title;
        private $text;
        private $author;

        public function __construct(string $title, string $text, User $author){
            $this->title = $title;
            $this->text = $text;
            $this->author = $author;
        }
        public function getTitle():string
        {
            return $this->title;
        }
        public function getText():string
        {
            return $this->text;
        }
        public function getAuthor():User
        {
            return $this->author;
        }
    }

    class Cat{
        private $name;

        public function __construct(string $name){
            $this->name = $name;
        }
    }

    class Admin extends User{
        
    }
    $author = new User("Ivan");
    $cat = new Cat("Murka");
    $admin = new Admin("Admin");

    if ($admin instanceof User) echo 'yes';

    // $article = new Article("title", "text", $cat);ошибка
    $article = new Article("title", "text", $author);
    $article = new Article("title", "text", $admin);
    // var_dump($article);
    echo 'Имя автора: '.$article->getAuthor()->getName();

