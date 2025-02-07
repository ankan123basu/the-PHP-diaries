<?php
function setchildren(int $children = 8){
    echo "Total number of children are : $children \n";
}
setchildren(2);
setchildren(1);
setchildren();
setchildren(3);



// FATAL ERRORS

//function multiply(int $a, int $b){
//    return $a * $b;
//}
//echo multiply(2, "3 semesters");

//function multiply2(int $c, int $d){
//    echo $c * $d;
//}
//echo multiply2(2, "3 semesters");




function add(int $a, int $b){
    return $a + $b;
}

echo "5 + 10 = " . add(5, 10);
echo "\n";



function add1(float $a, float $b){
    return $a + $b;
}
echo add1(1.2, 5.2);
echo "\n";

function add2(float $a, float $b){
    return (int)($a + $b);
}
echo add2(1.2, 5.2);



function process($num1, $num2, $num3){
    $product = $num1 * $num2 * $num3;
    echo "The product of $num1, $num2 and $num3 is: $product";
}
process(2, 3, 4); // Calling the function



?>