<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function process($num1, $num2, $num3){
    $product = $num1 * $num2 * $num3;
    echo "<div style='border: 2px solid #000; padding: 20px; width: 300px; text-align: center; margin: 20px auto;'>";
    echo "The product of $num1, $num2, and $num3 is: $product";
    echo "<br>";
    echo "Hello, World!";
    echo "</div>"; 
}
process(2, 3, 4); // Calling the function
?>

</body>
</html>
