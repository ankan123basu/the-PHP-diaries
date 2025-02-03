<?php
$food = "pizza";
echo "You like $food<br>";
$age = 21;
echo "you are {$age} years old<br>";
$price = 4.99;
echo "your pizza is \${$price}<br>";
$online = true;
echo "online status {$online}<br>";
$total = NULL;
$quantity = 3;
echo "You have ordered {$quantity}X{$food}<br>";
$total = $quantity * $price;
echo "price is $total";
$f = ['ANKAN', 'ANKIT'];
echo implode(", ", $f);  // anyone
print_r($f);   // anyone 
$f = ['ANKAN', 'ANKIT']; // or
foreach ($f as $name) {
    echo $name . " "."<br>";
}

// OPERATORS 

$x = 10;
$y = 20;

echo "Sum of \$x+\$y is: " . ($x + $y) . "<br>";
echo "Difference of \$x-\$y is: " . ($x - $y) . "<br>";
echo "Multiplication of \$x*\$y is: " . ($x * $y) . "<br>";
echo "Division of \$x/\$y is: " . ($x / $y) . "<br>";
echo "Modulus of \$x%\$y is: " . ($x % $y) . "<br>";
echo "Exponentiation of \$x**\$y is: " . ($x ** $y) . "<br>";


$a = 10;
echo "Initial value of a: $a\n";
$a += 5;
echo "Value of a after += 5: $a\n"; 
$a -= 3; 
echo "Value of a after -= 3: $a\n"; 
$a *= 2; 
echo "Value of a after *= 2: $a\n"; 
$a /= 4; 
echo "Value of a after /= 4: $a\n"; 
$a %= 3;
echo "Value of a after %= 3: $a\n";  
$a &= 6; 
echo "Value of a after &= 6: $a\n"; 
$a |= 8; 
echo "Value of a after |= 8: $a\n"; 
$a ^= 5; 
echo "Value of a after ^= 5: $a\n"; 
$a <<= 1; 
echo "Value of a after <<= 1: $a\n"; 
$a >>= 2; 
echo "Value of a after >>= 2: $a\n";
$greeting = "hello";
$object = "world";
$result = $greeting . " " . $object;
echo "Concatenated string: $result\n";

$x=2.5;
$y=35;
$z=2.5;
var_dump($x===$z);
var_dump($x<>$z);
var_dump($x!=$z);
var_dump($x!==$z);

$c = 4;
echo"the result is: ".++$c."\n";
echo"the result is: ".--$c."\n";
echo"the result is:". $c++."\n";
echo"the result is: ".$c--."\n";
?>

<?php
$a = 15;
$b = 5;

echo "Arithmetic Operators:\n";
echo "Addition: " . ($a + $b) . "\n"; 
echo "Subtraction: " . ($a - $b) . "\n"; 
echo "Multiplication: " . ($a * $b) . "\n"; 
echo "Division: " . ($a / $b) . "\n"; 
echo "Modulus: " . ($a % $b) . "\n\n";

// Assignment operators
echo "Assignment Operators:\n";
$a += 10;
echo "After += 10: $a\n";
$a -= 5;
echo "After -= 5: $a\n\n";

echo "Comparison Operators:\n";
$c = 20;
if ($a == $c) {
    echo "$a is equal to $c\n";
} else {
    echo "$a is not equal to $c\n";
}

$d = 30;
if ($a < $d) {
    echo "$a is less than $d\n";
} else {
    echo "$a is not less than $d\n";
}
echo "\n";

echo "String Operators:\n";
$str1 = "Hello";
$str2 = " World";
$result = $str1 . $str2;
echo "Concatenation: $result\n";
$str1 .= $str2;
echo "After appending: $str1\n\n";

echo "Increment/Decrement Operators:\n";
$num = 5;
echo "Initial value: $num\n";
echo "Post-increment: " . $num++ . "\n"; 
echo "After post-increment: $num\n"; 
echo "Pre-increment: " . ++$num . "\n"; 
echo "Post-decrement: " . $num-- . "\n"; 
echo "After post-decrement: $num\n"; 

$a= 10;;
$b = 9;
var_dump($a && $b);
var_dump($a || $b);
var_dump($a xor $b);
var_dump(!$a);
echo "$a xor $b". $a xor $b;
$a = 10;
$z ="10";
//var_dump($a === $z);
?>


