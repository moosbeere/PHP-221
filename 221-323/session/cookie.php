<?php

    setcookie('test', 'TEST!', time()+30);
    if (isset($_COOKIE['test'])) echo $_COOKIE['test'];



    