<?php
echo "I love pizza <br>";
echo "Its really good <br>";

// VARIABLES 
$name = "Ankan Basu";
$food = "pizza";
echo $name."<br>";
echo "Hello {$name}<br>";
echo "You like $food<br>";


$age = 21;
echo "you are {$age} years old<br>";
$quantity = 3;
echo "you would like to buy {$quantity} items<br>";

$gpa = 8.92;
$price = 4.99;
// NEED TO USE ESCAPE SEQUENCE TO PRINT $
echo "your pizza is \${$price}<br>";

$online = true;
echo "online status {$online}<br>";


$total = NULL;
echo "You have ordered {$quantity}X{$food}<br>";
$total = $quantity * $price;
echo "price is $total";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button> Order pizza</button>
</body>
</html>



