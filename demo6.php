<?php

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";


echo PHP_EOL;

foreach($age as $x=>$x_value)
{
    echo "Name=" . $x . ", Age=" .$x_value;
    echo PHP_EOL;
}




?>