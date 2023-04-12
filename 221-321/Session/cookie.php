<?php

    // setcookie('test', 'TEST', time()+3600*24*365);
    // echo $_COOKIE['test'];
    session_start();
    $_SESSION['test'] = 'Test';
    echo '<a href="index1.php">Click</a>';