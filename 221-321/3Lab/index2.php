<?php
    $a = 10;
    $b = 5;
    if ($a > 5) echo $a.'<br>'; 

    // if ($a < 10){
    //     $a+=2;
    //     echo $a;
    // }elseif ($a == 5) echo "$a > 5";
    // else echo 'ok';

    $min = ($a > $b) ? $b:$a;
    // echo $min;

    // switch ($a + $b){
    //     case 10: 
    //         echo "$a + $b<br>";
    //         break;
    //     case 11;
    //         echo "ok<br>";
    //         break;
    //     default: echo 'default';
        
    // }

    // while($a >= 5){
    //     echo $a.'<br>';
    //     $a--;
    // }

    // do{
    //     $a++;
    //     echo $a;
    // }while($a < 10);

    for ($i = 0; $i <= 5; $i++){
        if ($i == 3) break;
        echo $i.'<br>';
    }