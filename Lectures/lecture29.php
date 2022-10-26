<?php

//$fptr = fopen ("myfile2.txt", "w");
//fwrite ($fptr , "This is the file which is used to make the tutorials and here I am writing some lines for testing");
// It opens the file and overwrite all the content passing
//fwrite($fptr , "Hiii I am khushi");


// Appending file:

$ftr = fopen ("myfile2.txt" , "a");
fwrite ($ftr, "\n Appending the files"); // appending the content in the file

?>