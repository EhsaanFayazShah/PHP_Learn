<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>
<?php
// define("test",50);
// echo test;
// $a="Hello";
// $a .=" world";
// for ($a=1; $a < 100; $a=$a+10) { 

//     for($b=$a;$b<$a+10;$b++){
//         echo "$b  ";
//     }
//     echo "<br>";
// }
/*
for ($i=0; $i < 10; $i++) { 
    if ($i==3) {
        goto abc;
    }
}
abc:echo"Hello<br>";

$say =function ($name){
    echo "Hello $name";
};
$say("Ehsaan");

// Recursive function 
function factorial($n){
    if($n==1||$n==0){
        return 1;
    }else{
        return ($n * factorial($n-1));
    }
}
echo factorial(5);

$x=10;
$y=90;
function test(){
    global $x, $y;
    $x+=$y;
}
test();
echo "<br>".$x;

$colors=array("red",'green',20,423.23);
echo "<pre>";
print_r ($colors);
echo "</pre>";
echo "<ul>";
for ($i=0; $i < count($colors); $i++) { 
    echo "<li> $colors[$i] </li>";
}echo "</ul>";


$asssoc = array("Ehsaan"=>21,"Adnan"=>21,"Danish"=>24);
echo "<ol>";
foreach ($asssoc as $key => $value) {
    echo "<li> $key = $value </li>";
} 
echo "</ol>";
var_dump($asssoc);
echo $asssoc['Ehsaan'];


$multi_arr = [
    [1, "Ehsaan", "Student", "2000"],
    [2, "Adnan", "Student", "2000"],
    [3, "Danish", "Salesman", "2000"],
    [4, "Sufaira", "Govt. Employee", "20000"],
];
echo "<table border='1px' cellspacing='0'cellpadding='5px'>";
echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Profession</th>
    <th>Salary</th>
</tr>";
foreach ($multi_arr as $row) {
    echo "<tr>";
    foreach ($row as $col)
        echo "<td> $col </td> ";
    echo "</tr>";
}
echo "</table>";
*/
// Multi-Dimenstional associative array 
$marks = [
    "Ehsaan" => [
        "java" => 82,
        "Javascript" => 88,
        "PHP " => 80
    ],
    "Adnan" => [
        "java" => 82,
        "Javascript" => 88,
        "PHP" => 80
    ],
    "Danish" => [
        "java" => 82,
        "Javascript" => 88,
        "PHP " => 80
    ],
    "Farhan" => [
        "java" => 82,
        "Javascript" => 88,
        "PHP " => 80
    ],
    "Yamin" => [
        "java" => 82,
        "Javascript" => 88,
        "PHP " => 80
    ]
];
// echo "<pre>";
// print_r($marks);
// echo "</pre>";
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
<th>Name</th>
<th>Java</th>
<th>Php</th>
<th>JS</th>
</tr>";
foreach ($marks as $key => $value) {
    echo "<tr>
    <td>$key</td>";
    foreach ($value as $val) {
        echo "<td> $val </td>";
    }
    echo "</tr>";
}
echo "</table>";



$multi_arr = [
    [
        1, "Ehsaan", "Student", "2000"
    ],
    [
        2, "Adnan", "Student", "2000"
    ],
    [
        3, "Danish", "Salesman", "2000"
    ],
    [
        4, "Sufaira", "Govt. Employee", "20000"
    ],
];
echo "<table border ='2px' cellspacing=0 cellpadding='5px'>";
echo "<tr>
<th>Id</th>
<th>Name</th>
<th>profession</th>
<th>Salary</th>
</tr>";
foreach ($multi_arr as list($id, $name, $profession, $salary)) {
    echo "<tr> <td> $id</td> <td> $name </td><td>$profession </td><td>$salary </td> </tr>";
}
// echo "</tr>";
echo "</table>";
// array_count_values($marks['$farhan']);
echo count($marks['farhan']);

// phpinfo();















?>