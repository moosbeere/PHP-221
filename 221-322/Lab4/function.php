<?php


// echo sum(3,4,7);


function factRec($n){
    if($n < 2) return 1;
    else return $n*factRec($n-1);
}

// echo factRec(5);

$a = 10;
$b = 5;


function sum($a, $b){
    global $c;
    $c = 20;
    return $a+$b+$c; 
 }

 function div($a, $b){
    return $a/$b;
 }

 echo sum($a, $b).'<br>';
//  echo div($c, $b).'<br>';

 foreach($GLOBALS as $key=>$g){
    echo $key.' ';
    // print_r($g);
    echo '<br>';
 }

 var_dump($GLOBALS);


