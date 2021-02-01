<?php
$x=5;
$y=1212;

function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];

}

myTest();
echo $y; // 输出 15

?>