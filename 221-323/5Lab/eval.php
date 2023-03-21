<?php

foreach($_GET as $key=>$value){
    eval("\$$key=$value;"); //вот так работает
}
echo "Имя = $name, оклад = $x рублей<br>";

