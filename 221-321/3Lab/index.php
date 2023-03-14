<?php
    $a = 12;

    define("pi", 3.14);

    $R = 2;

    $L = 2 * $R * pi;
    // echo $L;

    $f = 0.2;
    $s = 'hello';
    $b = true;

    $i = (int)$b;
    // echo gettype($i).'<br>';
    
    // echo $i;

    $r = 3.136483262486;
    // echo $r.'<br>';
    // echo 'floor: '.floor($r).'<br>';
    // echo 'round: '.round($r).'<br>';
    // echo 'ceil: '.ceil($r).'<br>';

    $format = 0.2342;

    // printf("%.6f", $format);

    $e = 123;

    // printf("%'.010d", $e);

    $q = 32;
    $b = 23;
    $sum = $q+$b;
    // echo '$q + $b = '.$q + $b.'<br>';
    // // echo "$q + $b = $sum";
    // echo '$q - $b = '.$q - $b.'<br>';
    // echo '$q * $b = '.$q * $b.'<br>';
    // echo '$q / $b = '.$q / $b.'<br>';
    // echo '$q % $b = '.$q % $b.'<br>';


    $y = '2b';
    $c = '2a';

    // var_dump($y == $c);
    // var_dump($y === $c);
    // var_dump($y  2);
    // echo $y+$c.'<br>';
    // var_dump($y > $c);

    $t = true;
    $k = false;

    // var_dump($t || $k);

    $g = 6;
    // echo $g++.'<br>';
    // echo ++$g.'<br>';

    // echo $g--.'<br>';
    // echo --$g.'<br>';

    echo $g+=2;  

