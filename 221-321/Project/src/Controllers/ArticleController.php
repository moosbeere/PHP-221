<?php
namespace Controllers;
use View\View;
use Services\Db;

class ArticleController{

    private $view;
    private $db;

    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates');
        $this->db = new Db();
    }

    public function show(int $id){
        $sql = "SELECT * FROM `articles` WHERE `id`=$id";
        $article = $this->db->query($sql);
        $this->view->renderHtml('article/show.php', ['article' => $article[0]]);
    }
}