<?php

namespace Controllers;
    use View\View;
    use Models\Articles\Article;

    class ArticleController{

        private $view;

        public function __construct(){
            $this->view = new View(__DIR__.'/../../templates');
        }

        public function show(int $id){
            $article = Article::getById($id);
            // var_dump($article);
            if ($article == null) $this->view->renderHtml('errors/error.php', [], 404);
            else $this->view->renderHtml('articles/show.php', ['article'=>$article]);
        }
    }
