<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function multiplyFloat($num){
    $num = $num * 2;
    return $num;
}

$originalFloat = 10.5;
$result1 = multiplyFloat($originalFloat);
$result2 = multiplyFloat($result1);

echo "<div style='border: 2px solid green; color: black; padding: 20px; width: 300px; text-align: center; margin: 20px auto;'>";
echo "Inside the function, after  multiplication: $result1<br>";
echo "Inside the function, after second multiplication: $result2<br>";
echo "After function call: $result1<br>"; 
echo "</div>";
?>

</body>
</html>
