<?php

$fptr = fopen("myfile.txt", "r");

// $content = fgets($fptr); // print single line from the file
// echo $content; // update the pointer after printing each line
// echo $content;
// echo $content;

// while($a = fgets($fptr)){
//     echo $a;
// }


while($a = fgetc($fptr)){ // printing character by character
    echo $a;
    break;
}

fclose($fptr);
?>