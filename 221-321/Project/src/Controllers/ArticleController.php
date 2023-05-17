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
        $this->db = Db::getInstance();
    }

    public function show(int $id){
  
        $article = Article::getById($id);

       if (!$article) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }
        $this->view->renderHtml('article/show.php', ['article' => $article]);
        
    }

    public function edit(int $id){
        $article = Article::getById($id);
        $this->view->renderHtml('article/edit.php', ['article' => $article]);
        // $article->setTitle('new title');
        // $article->setText('new text');
        // $article->save();
    }

    public function update(int $id){
        $article = Article::getById($id);
        $article->setTitle($_POST['title']);
        $article->setText($_POST['text']);
        // $article->setAuthorId($_POST['author']);
        $article->save();
        $this->show($id);
    }
}