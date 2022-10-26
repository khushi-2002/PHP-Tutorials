<?php
/* data types:
1. strings
2. integer
3. float-- decimal point number
4. boolean -- var_dump is used to print the value as well as its type


*/

$friend = true;
$khushi = "Khushi";
$array = array("Khushi", "Rahul", "Moussa", "John");

echo var_dump($array);
echo "<br>"; 
echo var_dump($friend);
echo "<br>"; 
echo var_dump($khushi);
echo "<br>"; 
echo  $array[0];
echo "<br>"; 
echo $array[1];
echo "<br>"; 
$friend = NULL;
echo var_dump($friend);
?>