<?php
// Function that demonstrates passing an array by value
function modifyArray($arr){
    // Modifying the local copy of the array
    $arr[0] = "Changed";
    echo "Inside the function, after modification: ";
    print_r($arr);
}

// Main program
$originalArray = array(1,2,3);
echo "Before function call: ";
print_r($originalArray);

// Calling the function(pass by value)
modifyArray($originalArray);

// Checking the value after function call
echo "After function call: ";
print_r($originalArray);

function multiplyFloat($num){
    // Modifying the local copy of the float
    $num = $num * 2;
    echo "Inside the function, after multiplication: $num\n";
}

// Main program
$originalFloat = 10.5;
echo "Before function call: $originalFloat\n";

// Calling the function(pass by value)
multiplyFloat($originalFloat);

// Checking the value after function call
echo "After function call: $originalFloat\n";
?>
