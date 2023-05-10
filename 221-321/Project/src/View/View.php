<?php

namespace View;

class View{
    private $templatesPath;

    public function __construct(string $templatesPath){
        $this->templatesPath = $templatesPath;
    }

    public function renderHtml(string $templateName, array $vars, int $code = 200){
        extract($vars);
        include $this->templatesPath.'/'.$templateName;
    }
}

?>