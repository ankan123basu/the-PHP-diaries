<?php
// function sum($a,$b){
//     echo $a+$b."\n";
// }
// function difference($a,$b){
//     echo $a-$b."\n";
// }
// function product($a,$b){
//     echo $a*$b."\n";
// }
// function division($a,$b){
//     echo $a/$b;
// }
// sum(10,2);
// difference(10,2);
// product(10,2);
// division(10,2);

 function marks($a,$b,$c,$d,$e,$f){
     return ($a+$b+$c+$d+$e+$f);
}
 $total_sum=marks(76,67,78,81,90,91);
 echo "Total marks obtained by Ankan out of 600 is: ".$total_sum."\n";
 function average($total_sum){
     echo "Average marks obtained by Ankan is: ".($total_sum/6);
 }
 average($total_sum);

echo "\n";


//// Associative array storing subject credits
$subject=array("HTML"=>3,"CSS"=>2,"Javascript"=>3,"PHP"=>4,"Node js"=>5);
function print1($subject){
    foreach($subject as $x=>$y){
        echo $x." with credit ".$y."\n";
    }
}
print1($subject);

?>