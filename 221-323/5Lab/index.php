<?php
    // $a = 10;
    // $b = &$a;
    // echo "a = $a<br>";
    // echo "b = $b<br>";

    // $b = 15;
    // echo "a = $a<br>";

    // $abc = 20;
    // $z = 'abc';

    // echo $$z; 

    // $a=5;$b=2; $c=1;

    // F1($a,$b,$c);
    
    // print "a=$a,b=$b, c=$c<BR>";
    
    // $d=5;$e=2; $f=1;
    
    // list($d,$e,$f)=F1($d,$e,$f);
    
    // print "d=$d,e=$e, f=$f<BR>";


    // function F1(&$a, &$b, &$c){
    //     $a--; $b++; $c++;
    //     return array($a, $b, $c);
    // }

    
// $func = 'sin';
// $y = 30;
// $x= pi()/6;
// $z = $func($x);



// echo $x.'<br>';
// echo "$func($y<sup>o</sup>)=$z";

// $f = 'sin';
// $x = 30;
// eval('$z=$x/180*pi();');
// // $z=$x/180*pi();
// echo $z;
//     // $$z -> $.$z ->$abc

// $text =  file_get_contents('../../221-322/file.txt');
// file_put_contents('1.txt','123"/r/n"321');
// rename('1.txt', 'text.txt');
// copy('text.txt', 'file.txt');
// echo filesize('text.txt');

// $text = file_get_contents('1.txt');
// // $arr = explode("/r/n", $text);
// // var_dump($arr);
// $put = [1,2,3,4];
// file_put_contents('text.txt', implode(PHP_EOL, $put));
require('eval.php');
include('header.html');
echo '<form action="eval.php" method="get">
      <label for="name">Введите имя</label>
<input type="text" name="name" id="">
<label for="x">Введите значение</label>
<input type="text" name="x" id="">
<button type="submit">Отправить</button>
</form>
</main>';
include('footer.html');