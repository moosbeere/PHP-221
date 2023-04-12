<?php
    session_start();
    if (!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 1;
    }else
        $_SESSION['counter'] +=1;
    echo 'Вы посещали данную страницу: '.$_SESSION['counter'].'<br>';
    // $_SESSION['test'] = 'TEST';
    unset($_SESSION['test']);
    echo $_SESSION['test'];

    session_destroy();

