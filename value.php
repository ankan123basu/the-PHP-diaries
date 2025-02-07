<?php

function testing(&$string){
$string .= " and something extra.";
}
$str = "This is a STRING";
testing($str);
echo $str;
?>
