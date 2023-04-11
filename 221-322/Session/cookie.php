<?php


    setcookie('test', 'TEST', time()+1);
    setcookie('test1', 'TEST', time());

    echo $_COOKIE['test'];