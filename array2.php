<?php

// ####################### Indexed Arrays (List of Cars) #########################

// // Defining an indexed array of car brands
// $cars = array("Audi", "Pagani", "Ferrari");
// var_dump($cars);  // Prints structure and values of the array

// // Another way to define an indexed array using shorthand []
// $cars = [
//     "Audi",
//     "Pagani",
//     "Ferrari",
// ];
// var_dump($cars);  // Prints the array structure
// echo count($cars); // Outputs the number of elements in the array (3)

// ####################### Adding Elements to Indexed Arrays #########################

// // Defining an empty array and assigning values to specific indices
// $cars2 = [];
// $cars2[0] = "Lamborghini";
// $cars2[1] = "Mercedes";
// $cars2[2] = "Honda";
// var_dump($cars2);  // Prints the array structure

// // Modifying an existing element in the $cars array
// $cars[2] = "Tata"; // Changes "Ferrari" to "Tata"
// var_dump($cars);  // Prints modified array

// ####################### Looping Through Indexed Arrays #########################

// // Iterating over the $cars2 array and printing each car brand
// foreach ($cars2 as $x) {
//     echo "$x \n";  // Outputs Lamborghini, Mercedes, Honda (each on a new line)
// }

// ####################### Assigning Values to Specific Indexes #########################

// // Assigning values to specific non-sequential indexes
// $cars[7] = "aa";
// $cars[12] = "ab";
// $cars[16] = "ac";
// var_dump($cars);  // Prints the modified array structure, showing gaps in indices

// ####################### Using array_push() to Append Elements #########################

// // Adding an element at the end of the $cars array
// array_push($cars, "Hello");
// var_dump($cars);  // Prints updated array with "Hello" at the last position

// ####################### Associative Arrays (Country and Capitals) #########################

// // Creating an associative array where country names are keys and capitals are values
$country = array(
    "India" => "Delhi",
    "Russia" => "Moscow",
    "China" => "Beijing"
);

// // Modifying a specific key-value pair
// $country["Russia"] = "hello"; // Changes "Moscow" to "hello"
// var_dump($country);  // Prints updated associative array

// ####################### Iterating Through Associative Arrays #########################

// // Looping through and printing only values
// foreach ($country as $x) {
//     echo "$x ";  // Outputs: Delhi Moscow Beijing (on the same line)
// }
// echo "\n"; // Adds a new line

// ####################### Extracting Keys and Values Separately #########################

// Getting all keys (country names) and values (capitals) as separate arrays
$keys = array_keys($country);  
$values = array_values($country);

// Iterating through keys and values using a for loop
for ($i = 0; $i < count($country); $i++) {
    echo "Key=" . $keys[$i] . " values=" . $values[$i];  // Prints each country and its capital
    echo "\n";  // Adds a new line for readability
}

// ####################### Alternative Iteration Using foreach #########################

// // Using foreach to iterate through key-value pairs
// foreach ($country as $a => $b) {
//     echo "$a: $b \n";  // Outputs: India: Delhi, Russia: Moscow, China: Beijing (each on a new line)
// }

// ####################### Incomplete Section (Commented Out) #########################

// // Attempted for loop (partially written and commented out)
// for($i=0;$i<3;$i++){
//     echo 
// }

?>
