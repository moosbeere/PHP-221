<?php
    // $a = array('summer');
    // var_dump($a);
    // echo "<br>";
    // echo $a[0];
    // echo strlen($a[0]);

    // $a = array(1,2,3);
    // $a[7] = 10;
    // // // print_r($a);

    // for ($i = 0; $i<8; $i++){
    //     echo "\$a[$i] = ". $a[$i].'<br>';
    // }

    // $data['месяц'] = 'март';
    // $data['число'] = 14;
    // $data['год'] = 2023;

    // var_dump($data);

    // foreach($data as $d){
        // echo $d.'<br>';
    // }
    
    // foreach($data as $key=>$value){
    //     echo $key.' = '.$value.'<br>';
    // }

    // $a = array('1',2);
    // $b = [1,2];
    // $c = $b + $a;
    // // print_r($c);

    // // if($a == $b) echo 'ok';

    // $array = [10, 3, 5, 15];
    // // echo "Массив: ";print_r($array);echo "<br>";
    // // sort($array);
    // $key=['6'=>10, '3'=>4, '8'=>1];
    // asort($key);
    // var_dump($key);

    // ksort($data);
    // krsort($key);
    // var_dump($key);

    // $array = [10, 3, 'green', 15];
    // $ar=array_pad($array, 6, 'blue');
    // print_r($ar);

    // echo array_pop($array);
    // echo array_push($array, 'blue', 'yellow');
    // print_r($array);
    // echo array_shift($array);
    // array_unshift($array, 'dfkg', 'dhfkd');
    // print_r($array);


    $array = array(
        array(1,2,3),
        array('red', 4, 'blue'),
        array(45,55)
    );

    // var_dump($array);
    // foreach($array as $ar1){
    //     foreach($ar1 as $ar){
    //         echo $ar.' ';
    //     }
    //     echo '<br>';
    // }

    $M[0][0] = "10";
    $M[0][1] = "2";
    $M[1][0] = NULL;
    $M[1][1]=23;
    // var_dump($M);

    $A = [[9.7],[6.8],[6,7,8]];
    // var_dump($A);

    $str = array(1,2,3,'red'=>5, 'yellow'=>6, NULL);
    var_dump($str);
    echo '<br>';

    for ($i = 0; $i<count($str); $i++){
        echo $i.' = '.$str[$i].'<br>';
    }
    
    foreach($str as $key=>$s){
        echo $key.' = '.$s.'<br>';
    }







