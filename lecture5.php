<?php
/* operators in PHP
1. Airthematic operators
2. Assignment operators
3. Comparison Operators
4. Logical operators
*/

$a = 45;
$b = 12;

// Airthematic operators
echo " For a + b= ". ($a+$b)."<br>"; // solve the breacket first and then convert it to string
echo " For a - b= ". ($a-$b)."<br>";
echo " For a * b= ". ($a*$b)."<br>";
echo " For a / b= ". ($a/$b)."<br>";
echo " For a % b= ". ($a%$b)."<br>";
echo " For a ** b= ". ($a**$b)."<br>";


// Assignment operators
$x = $a;
echo "For $x the value is = ".($x)."<br>";
echo "For $x the value is after += is ".($x+=$x)."<br>";
echo "For $x the value is atfer %= is ".($x%=$x)."<br>";


// Comparison Operators
$x=90;
$y=78;

echo "For x and y the values are ";// var_dump() executes first thus we wrote it in next line
echo var_dump($x==$y);
echo "<br>"; // <,>,<=,>=,<>(not equal to)
echo "For x and y the values are ";
echo var_dump($x<>$y)."<br>";


// Logical operators

$x= true;
$y= false;

echo  var_dump($x and $y)."<br>";
echo  var_dump($x || $y)."<br>";
echo  var_dump($x && $y)."<br>";
echo  var_dump($x or $y)."<br>";
echo var_dump(!$x)."<br>";

?>

