<?php
    include __DIR__.'/../header.php';
        echo '<h2>'.$article->getName().'</h2>';
        echo '<p>'.$article->getText().'</p>';
        echo '<p>'.$article->getAuthorId()->getNickname().'</p>';
    include __DIR__.'/../footer.html';

            