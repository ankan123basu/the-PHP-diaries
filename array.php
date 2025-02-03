<?php
// Array in php is only collection of elements

$cars = array("Volvo", "BMW", "Toyota"); // create a array ny using array()
//echo "$cars";  Not possible array to string conversion
echo "\n";
var_dump($cars);

$cars = ["Volvo", "BMW", "Toyota"]; // Another method of creating an array
var_dump($cars);


$cars = ["Volvo",
         "BMW",
         "Toyota",    // trailing comma will have not effect 
];  // display array in multiple lines
var_dump($cars);
echo "\n";


// Count function of an array 
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);   
echo "\n";     


// Declare empty array
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
var_dump($cars);



// Acess array with indexed number
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
echo "\n";

// change value by index number
$cars = array("Volvo", "BMW", "Toyota");
$cars[2] = "Maruti";
var_dump($cars); 

// loop through indexed array
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x \n";
}


$cars = array("Volvo", "BMW", "Toyota");
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";
array_push($cars, "Ford");
var_dump($cars);


// LOOPING WITH INDEXED ARRAY

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x\n";
}
echo "hi\n";

$cars = array("Volvo", "BMW", "Toyota");
for ($i = 0; $i < count($cars); $i++) {
    echo $cars[$i] . "\n";
}
echo "hi\n";
$cars = array("Volvo", "BMW", "Toyota");
$i = 0;
while ($i < count($cars)) {
    echo $cars[$i] . "\n";
    $i++;
}
echo "hi\n";
$cars = array("Volvo", "BMW", "Toyota");
$i = 0;
do {
    echo $cars[$i] . "\n";
    $i++;
} while ($i < count($cars));


// Associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo "\n";
 $car["year"] = 2025;
 var_dump($car["year"]);
 echo "\n";
 $car["year"] = "2025";
 var_dump($car["year"]);


















$a = array("INT219"=>"Front end", "INT220" => "PHP", "CSE316"=>"OS");  // Associative array
$b = array("INT222"=>"Node js", "INT 221" => "Laravel", "CSE316"=>"OS");  // Associative array
$c = ($a + $b);  // Array union 
//The + operator merges arrays but does not overwrite keys that already exist in the first array.
//$c = $a + $b:
//$a remains as is.
//Only keys from $b that do not exist in $a are added to $c
var_dump($c);
echo"\n";
var_dump($a == $b);
echo"\n";
var_dump($a === $b);
echo"\n";
var_dump($a != $b);
echo"\n";
var_dump($a<>$b);
echo"\n";

$a = ["INT219" => "Front end", "CSE316" => "OS"];
$b = ["CSE316" => "AI", "INT221" => "PHP"];
$result = array_merge($a, $b);    //Combines two arrays into one. Unlike the + operator, it replaces duplicate keys from the first array with values from the second.
print_r($result);
echo "\n";

$keys = array_keys($a);   // Returns all the keys from an array.
print_r($keys);

$values = array_values($a); // Returns all the values from an array.
print_r($values);

$key = array_search("OS", $a);  // Searches for a value in the array and returns the key if found
echo $key;

$a = ["PHP", "Laravel", "PHP", "Node"];
$result = array_unique($a);   // Removes duplicate values from the array.
print_r($result);


if (array_key_exists("INT219", $a)) {   // Checks if a specific key exists in an array.
    echo "Key exists!";
} else {
    echo "Key does not exist!";
}

if (in_array("OS", $a)) {  // Checks if a value exists in an array.
    echo "Value exists!";
} else {
    echo "Value does not exist!";
}

$a = ["Front end", "OS", "PHP"];
$b = ["OS", "AI"];

$result = array_diff($a, $b);   // Finds values that exist in one array but not in another.
print_r($result);

$result = array_intersect($a, $b);  // Finds values that exist in both arrays.
print_r($result);


$keys = ["INT219", "CSE316"];
$values = ["Front end", "OS"];

$result = array_combine($keys, $values);  //Combines two arrays, using one as keys and the other as values.
print_r($result);


// SORTING
// 1) Ascending Order by Values (sort)
sort($a);
print_r($a);

// 2) Descending Order by Values (rsort)
//rsort($a);
//print_r($a);

// 3) Descending Order by Keys (krsort)
//krsort($a);
//print_r($a);


// Array Slice (array_slice)   Extracts a portion of the array.
$result = array_slice($a, 1, 2); // Start at index 1, take 2 elements
print_r($result);

 //Push (add to the end):
array_push($a, "Laravel");
print_r($a);

// Pop (remove the last element):
array_pop($a);
print_r($a);


?>