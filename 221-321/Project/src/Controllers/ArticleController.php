<?php
namespace Controllers;
use View\View;
use Services\Db;
use Models\Articles\Article;

class ArticleController{

    private $view;
    private $db;

    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates');
        $this->db = new Db();
    }

    public function show(int $id){
  
        $article = Article::getById($id);
        $this->view->renderHtml('article/show.php', ['article' => $article]);
    }
}