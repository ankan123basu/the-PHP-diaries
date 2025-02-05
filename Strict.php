<?php declare(strict_types=1); // Ensure strict type checking is enabled ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function setchildren(int $children = 5){
    echo "Total number of children are : $children <br>";
}
setchildren(2);
setchildren(1);
setchildren();
setchildren(3);
?>

</body>
</html>
