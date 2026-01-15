<?php
$str = "this is the string";
echo "<br> $str";
$length =strrev($str);
$str2 = " This is second string";

$length =str_word_count($str);
echo"<br> $length";
$concate = $str. $str2;
echo"<br> $concate";

echo "<br> The replaced string is : ". str_replace("the", "a", $str);
?>