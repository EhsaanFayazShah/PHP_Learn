<?php
// echo strlen("Hello world!"); // outputs 12

// $str1 = "Hlll";
// $str2 = "ooo";
// echo strcmp($str1, $str2);

// $x = 23234;
// var_dump(is_int($x));
// $y = 234.234;
// var_dump(is_float($y));

// $z = acos(8);
// var_dump($z);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
// Finds whether a variable is a number or a numeric string
$x = "59.85" + 100;
echo $x . "<br>";
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


$num = 2323.2323;
$int_cast = (int)$num; //float to int casting
echo $int_cast;

echo "<br>";
$num = " 2323.2323";
$int_cast = (int)$num; //String to int
echo $int_cast;
