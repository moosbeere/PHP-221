<?php

    $arr = array('a'=>1,'v'=>'hdgfu','7'=>3);
    $a = [1,2,3];
    $b[0] = 1;
    $b[1] = 2;

    // var_dump($arr);
    // for ($i = 0; $i < count($arr); $i++) echo $arr[$i].'<br>';

    $str = ['месяц' => 'март', 'год'=>2023, 'день'=>14];
    // for ($i = 0; $i < count($str); $i++) echo $str[$i].'<br>';

    // foreach($str as $s) echo $s.'<br>';
    // foreach($arr as $key=>$a) echo $key.' = '.$a.'<br>';

    arsort($b);
    // print_r($b);
    ksort($arr);
    // print_r($arr);

    $b = array_pad($arr, 5, $b);
    // var_dump($b);
    // echo array_pop($b);
    array_push($arr, 'red');
    // var_dump($arr);
    // echo array_shift($arr);
    array_unshift($arr, 'hello');
    // var_dump($arr);

    $arr = array(
        array(1,2),
        array('a',3),
        array(5,8,2,7),
    );
    // var_dump($arr);

    foreach($arr as $a1){
        foreach($a1 as $a){
            echo $a.' ';
        }
        echo '<br>';
    }
    

    function compare1($a, $b){
        if ($a == $b) return 0;
        elseif ($a<$b) return 1;
        else return 0;
    }

    usort($arr, 'compare1');
    
    foreach($arr as $a1){
        foreach($a1 as $a){
            echo $a.' ';
        }
        echo '<br>';
    }









    

