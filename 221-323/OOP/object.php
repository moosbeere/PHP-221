<?php
    class User{
        private $name;

        public function __construct(string $name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    class Cat{
        private $name;

        public function __construct(string $name){
            $this->name = $name;
        }
    }

    class Admin extends User
    {

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
        public function getTitle(){
            return $this->title;
        }
        public function getText(){
            return $this->text;
        }
        public function getAuthor(): User
        {
            return $this->author;
        }
    }

    $admin = new Admin("Admin");
    $cat = new Cat("Barsik");
    $user = new User("Ivan");
    // $article = new Article("new article", "Lorem ipsum", $user);
    $article = new Article("new article", "Lorem ipsum", $admin);
    // $article = new Article("new article", "Lorem ipsum", $cat);ошибка тайп-хинтинга
    // var_dump($article);

    echo $article->getAuthor()->getName();

