<?php
$x = "Hello World";
echo strtoupper($x); // upper case
echo "\n";

$x ="Hello World";
echo strtolower($x); // lower case
echo "\n";

$x ="Hello World";
echo str_replace("World","Dolly", $x); // String replacement:
//str_replace("World", "Dolly", $x) replaces the word "World" in "Hello World" with "Dolly": Hello Dolly.
echo "\n";

$x ="Hello World";
echo strrev($x); // reverse
echo "\n";

$x = "hello";
$y = "world";
//$z = $x." ". $y; // print with space
$z = $x.$y;  // print without space
echo $z;
echo "\n";
$x = "hello";
$y = "world";
$m = "$x$y"; //print without space   using  DOUBLE QUOTES
echo $m;
echo "\n";


// Get the length of a string
$x = "Hello World";
echo strlen($x); // String length
echo "\n";

//Count the number of words in a string
echo str_word_count($x); // Word count
echo "\n";

// Repeat a string
echo str_repeat("PHP ", 3); // Repeats "PHP " 3 times
echo "\n";

// Find a substring's position
echo strpos($x, "World"); // Position of "World" in the string
echo "\n";

// Extract a substring
echo substr($x, 6, 5); // Extracts "World"
echo "\n";

// Convert the first character to uppercase
$x = "hello world";
echo ucfirst($x); // Uppercase first letter
echo "\n";

// Convert the first character of each word to uppercase
echo ucwords($x); // Uppercase first letter of each word
echo "\n";

// Compare two strings
$a = "hello";
$b = "world";
echo strcmp($a, $b); // 0 if equal, non-zero if different
echo "\n";

// Trim whitespace from a string
$x = "   Hello World   ";
echo trim($x); // Removes spaces from both ends
echo "\n";

// Check if a string starts with a specific substring
$x = "Hello World";
if (str_starts_with($x, "Hello")) {
    echo "Starts with 'Hello'";
}
echo "\n";

//Check if a string ends with a specific substring
if (str_ends_with($x, "World")) {
    echo "Ends with 'World'";
}
echo "\n";

// Split a string into an array
$x = "apple,banana,cherry";
print_r(explode(",", $x)); // Splits string into an array by comma

// Join an array into a string
$fruits = ["apple", "banana", "cherry"];
echo implode("-", $fruits); // Joins array elements with "-"
echo "\n";

// Pad a string to a certain length
$x = "123";
echo str_pad($x, 5, "0", STR_PAD_LEFT); // Pads with zeros on the left
echo "\n";

// Addslashes to escape special characters
$x = "John's book";
echo addslashes($x); // Escapes special characters
echo "\n";

// Remove slashes added with addslashes
$y = addslashes($x);
echo stripslashes($y); // Removes the slashes
echo "\n";

//Shuffle a string
$x = "abcdef";
echo str_shuffle($x); // Randomly shuffles characters in the string
echo "\n";

// Repeat a string multiple times
echo str_repeat("Repeat! ", 3); // Prints "Repeat! Repeat! Repeat! "
echo "\n";
