<?php

// $cars=array("Audi","Pagani","Ferrari");
// var_dump($cars);

// $cars=["Audi",
//     "Pagani",
//     "Ferrari",
// ];
// var_dump($cars);
// echo count($cars);

// $cars2=[];
// $cars2[0]="Lamborghini";
// $cars2[1]="Mercedes";
// $cars2[2]="Honda";
// var_dump($cars2);
// $cars[2]="Tata";
// var_dump($cars);

// foreach($cars2 as $x){
//     echo "$x \n";
// }
// $cars[7]="aa";
// $cars[12]="ab";
// $cars[16]="ac";
// var_dump($cars);

// array_push($cars,"Hello");
// var_dump($cars);
// $country=array("India"=>"Delhi","Russia"=>"Moscow","China"=>"Beijing");
// $country["Russia"]="hello";
// var_dump($country);

$country=array("India"=>"Delhi","Russia"=>"Moscow","China"=>"Beijing");
// foreach($country as $x){
//     echo "$x ";
// }
// echo "\n";
$keys = array_keys($country);  // Get all the keys
$values = array_values($country);

for($i=0;$i<count($country);$i++){
   echo "Key=".$keys[$i]," values=". $values[$i] ;
   echo "\n";
}

// foreach($country as $a=>$b){
//     echo "$a: $b \n";
// }
// for($i=0;$i<3;$i++){
//     echo 
// }
?>
