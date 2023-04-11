<?php
    session_start();
    if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 1;
    else $_SESSION['counter'] +=1;
    echo 'Количество обращений к сайту '.$_SESSION['counter'];

    session_destroy();

    // unset($_SESSION['counter']);

    // $_SESSION['test'] = 'Test!';

    // if (isset($_SESSION['test1']))
    //     echo $_SESSION['test1'];
    // else echo "no";
?>