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
?>
