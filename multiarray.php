<?php
// $result=array(
//     array("manoj",7,"pass"),
//     array("abc",8.7,"pass"),
//     array("xyz",4,"fail"),
// );
// echo $result[0][0]." ".$result[0][1]." ".$result[0][2];
// echo "\n";
// echo $result[1][0]." ".$result[1][1]." ".$result[1][2];
// echo "\n";
// echo $result[2][0]." ".$result[2][1]." ".$result[2][2];
// echo "\n";

// for($i=0;$i<count($result);$i++){
//     for($j=0;$j<count($result);$j++){
//         echo $result[$i][$j]."\n";
//     }
// }

$cars=array(
    array(
        "Company"=>"Ferrari",
        "Color"=>"Blue",
        "Type"=>"Supercar"
    ),
    array(
        "Company"=>"Ferrari",
        "Color"=>"Blue",
        "Type"=>"Supercar"
    ),
    array(
        "Company"=>"Ferrari",
        "Color"=>"Blue",
        "Type"=>"Supercar"
    )
    );

foreach ($cars as $key => $sec_car) {
    echo "Car " . ($key + 1) . "\n";
    foreach ($sec_car as $attribute => $value) {
        echo "$attribute: $value\n";
    }
    echo "\n"; // Add a line break between cars
}
for($i=0;$i<count($cars);$i++){
    echo "Car ".$i."\n";
    
}
// $keys=array_keys($cars);
// for($i=0;$i<count($cars);$i++){
//     for($j1=0;$j<count($cars);$j++){
//         echo
//     }
// }
?>