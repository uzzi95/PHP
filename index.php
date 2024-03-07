<?php

$name = "Hello Bhai";  // STRING
$age = 50;             // INT   
$isCnic = true;        //BOOLEAN  
$marks = 80.65;        //FLOAT 

echo "$name";
echo "<br> $age";
echo "<br> $isCnic";
echo "<br> $marks";

// ARITHEMATIC OPERATIONS

$a = 20;
$b = 30;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;
echo "<br> The sum of $a + $b is : " .$c;

echo "<br> The sum of $a - $b is : " .$d;

echo "<br> The sum of $a * $b is : " .$e;

echo "<br> The sum of $a / $b is : " .$f;

echo "<br> The sum of $a % $b is : " .$g;

// INCREMENT

$apple = 70;
// POST INCREMENT
echo "<br>".$apple++;
echo "<br>" .$apple;

// PRE INCREMENT
echo "<br>" .++$apple;

// DECREMENT
echo "<br>" .--$apple;

// INITIAL NUMBER 200
// 195
// 235
// 109
// 204
// 80 
// 196
// 300

// $number = 200;

// echo "<br>".$number-5;
// echo "<br>".$number+35;
// echo "<br>".$number-91;
// echo "<br>".$number+4;
// echo "<br>".$number-120;
// echo "<br>".$number-4;
// echo "<br>".$number+100;

$mango = 200;
echo"<br> $mango";
$mango -=5;
echo "<br> $mango";

$mango = 200;
echo"<br> $mango";
$mango +=35;
echo "<br> $mango";

$mango = 200;
echo"<br> $mango";
$mango -=91;
echo "<br> $mango";

$mango = 200;
echo"<br> $mango";
$mango +=4;
echo "<br> $mango";

$mango = 200;
echo"<br> $mango";
$mango -=120;
echo "<br> $mango";

$mango = 200;
echo"<br> $mango";
$mango -=4;
echo "<br> $mango";

$mango = 200;
echo"<br> $mango";
$mango +=100;
echo "<br> $mango";



?>