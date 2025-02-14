<?php
$lang = "PHP";
function mytest(){
    global $lang;
    echo $lang;
    echo "\n";
}

mytest();
echo $lang; 



$lang = "PHP";
function mytest1(){
    $l = $GLOBALS['lang'];
    echo $l;

}
mytest1();
echo $lang;
echo "\n";


$x = 300;
$y = 400;
function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
function subtraction(){
    $GLOBALS['z'] = $GLOBALS['x'] - $GLOBALS['y'];
}
function multiplication(){
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
function division(){
    $GLOBALS['z'] = $GLOBALS['x'] / $GLOBALS['y'];
}
addition();
echo $z;
echo "\n";
subtraction();
echo $z;
echo "\n";
multiplication();
echo $z;
echo "\n";
division();
echo $z;
echo "\n";

?>