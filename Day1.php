<?php
$a = "Hello!!!";
$b = 12;
$c = 10.999;
echo $a."\n";
echo $b."\n";
echo $c."\n"; 
var_dump($c);

// This is a comment 
/* this is 
a multiline comment */

echo "Hello, World!<br>";
$num1 = 5;
$num2 = 10;
$sum = $num1 + $num2;
echo "The sum of $num1 and $num2 is: $sum";


function test(){   // IMPORTANT
    global $x;
    echo"Global variable".$x;
}
test();


$f = ['ANKAN', 'ANKIT'];    // IMPORTANT for array
echo implode(", ", $f);  // anyone
print_r($f);   // use this to print 
$f = ['ANKAN', 'ANKIT']; // or
foreach ($f as $name) {
    echo $name . " "."<br>";
}



$name = "Ankan";
echo 'Hello, $name'; 
echo "/n";
echo "Hello, $name\n";


// $input = trim(fgets(STDIN));  //REMOVES NEW LINES AND EXTRA SPACES
//echo "You entered: . $input;
//$input = readline("Enter something: ");
//echo "You entered: " . $input;



$a = 43;
$b = 'hi';
$c = 8.9;
$d = true;
$e = NULL;
$f = [1,2,3];
var_dump($a);
echo"\n";
var_dump($b);
echo"\n";
var_dump($c);
echo"\n";
var_dump($d);
echo"\n";
var_dump($e);
echo"\n";
var_dump($f);
echo"\n";

$ch = 'j';
switch($ch){
    case 'a':
        echo("It is a vowel");
        break;
        case 'e':
            echo("It is a vowel");
            break;
            case 'i':
                echo("It is a vowel");
                break;
                case 'o':
                    echo("It is a vowel");
                    break;
                    case 'u':
                        echo("It is a vowel");
                        break;
                         default:
                            echo("It is a consonant");
                            break;
}
echo "\n";


?>