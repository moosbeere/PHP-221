<?php

// $arr = array('zero'=>'hello', 'ine'=> 'world');
// $a = [1,2,3,4];
// $b[0] = 'hello';
// $b[1] = 56;
// $b[3]=4.5;

// for ($i = 0; $i<count($a); $i++) echo $a[$i].'<br>';
// // for ($i = 0; $i<count($arr); $i++) echo $arr[$i].'<br>';

// foreach($arr as $key=>$el) echo $key.' = '.$el.'<br>';

// echo $a[2];
// echo '<br>';
// echo $arr['zero'];
// echo '<br>';

// foreach($b as $key=>$el) echo $key.' = '.$el.'<br>';

// $c = ['1',2];
// $d = [1,2];
// if ($c == $d) echo 'ok';
// else echo 'no';

// $arr = [5,3,7,'a','hello', 48];
// var_dump($arr);
// echo '<br>';
// sort($arr);
// // var_dump($arr);
// echo '<br>';
// krsort($arr);
// // var_dump($arr);
// echo '<br>';
// $pad = array_pad($arr, 8, 'blue');
// // var_dump($pad);
// echo '<br>'.array_pop($arr).'<br>';
// echo array_push($arr, 'ok').'<br>';
// var_dump($arr);
// echo '<br>'.array_shift($arr).'<br>';
// var_dump($arr);
// array_unshift($arr, 'php');
// echo '<br>';
// var_dump($arr);

$arr = [
    ['a',2,'second', 6],
    [7,5],
    ['a','b','c','d'],
    ['a','a']
];

// foreach($arr as $a1){
//     foreach($a1 as $a){
//         echo $a.', ';
//     }
//     echo '<br>';
// }
// echo '<br>';

// usort($arr, 'compare');

// function compare($a, $b){//объявление
//     if ($a == $b) return 0;
//     elseif ($a > $b) return 0;
//     else return 1;
// }

// foreach($arr as $a1){
//     foreach($a1 as $a){
//         echo $a.', ';
//     }
//     echo '<br>';
// }

$c = 6;
$d = 10;
echo sum($c,$d).'<br>';//вызов функции
// echo div(20,5);

function sum($a, $b){
    global $e;
    $e = 30;
    return $a+$b+$e;
}

// echo '<br>e = '.$e;

function div($a, $b){
    return $a/$b;
}

foreach($GLOBALS as $key=>$value){
    echo $key.'<br> ';
}

