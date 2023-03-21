<?php

// $a = 10;
// $b = &$a;
// echo $b.'<br>';

// $b = 20;
// echo $a.'<br>';

// $x = 10;
// $z = 'x';

// echo $$z.'<br>';
// $a = 10;
// $b = 5;
// $c = 7;
// // list($a, $b, $c) = F1($a, $b, $c);
// F1($a, $b,  $c);
// echo "\$a = $a, \$b = $b, \$c = $c<br>";

// function F1(&$a, &$b, &$c){
//     $a--; $b++; $c++;
//     // return array($a, $b, $c);
// }

// $func = 'sin';
// $y = 30;
// $x = $y/180*pi();
// echo $x.'<br>';
// echo "$func($y<sup>o</sup>)=".$func($x).'<br>';

// eval("\$res = $y/180*pi();");
// echo $res.'<br>';                         

// if (!empty($_POST['x'])){
//     eval('$res ='. $_POST['x'].';');
//     echo $_POST['x'];
//     echo '<br>';
//     echo $res;
//     $s = '23+23';
//     echo $s;
// }

// echo file_get_contents('../../221-321/file.txt');
// $arr=[1,2,3,4];
// $str = implode(PHP_EOL, $arr);
// // file_put_contents('2.txt', $str);
// // rename('1.txt','text.txt' );
// // copy('text.txt', '1.txt');
// if (file_exists('text.txt')){ unlink('text.txt');}
// // echo filesize('2.txt');

// var_dump(file('2.txt', FILE_IGNORE_NEW_LINES));

require('header.html');
include('eval.php');
require('footer.html');
