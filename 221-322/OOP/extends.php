<?php
    class Post
    {
        protected $title;
        private $text;

        public function __construct(string $title, string $text){
            $this->title = $title;
            $this->text = $text;
        }

        public function setTitle(string $title){
            $this->title = $title;
        }
        public function setText(string $text){
            $this->title = $text;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getText(){
            return $this->text;
        }
    }

    class Lesson extends Post 
    {
        private $homeWork;

        public function __construct(string $title, string $text, string $homeWork){
            parent::__construct($title, $text);
            $this->homeWork = $homeWork;
        }
        public function setHomeWork(string $homeWork){
            $this->title = $homeWork;
        }
        public function getHomeWork(){
            return $this->homeWork;
        }
    }
    $lesson = new Lesson("Article", "lorem ipsum", "hw");
    echo $lesson->getText().'<br>';
    var_dump($lesson);


