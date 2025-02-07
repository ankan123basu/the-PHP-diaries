<?php
$a = rand(1, 6);
echo "Player 1 got $a\n";
$b = rand(1, 6);
echo "Player 2 got $b\n";
if($a > $b){
    echo "A wins";
}
else if($a < $b){
    echo "B wins";
}
else{
    echo "It's a draw";
}

?>