<?php
    session_start();
    if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 1;
    else {
        $_SESSION['counter'] +=1;
        echo 'Вы обновили страницу '.$_SESSION['counter'];
    }
    
    // unset($_SESSION['test']);
    // session_destroy();
    // if (isset($_SESSION['test'])) echo $_SESSION['test'];
    // else if (empty($_SESSION['test'])) echo 'empty';
    // else echo "session destroy";

