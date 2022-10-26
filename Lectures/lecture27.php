<?php

// To open the file
$fptr = fopen("myfile.txt" , "r"); // returns the bool value

if(!$fptr){
   die("Unable to connect");
}

//$content = fread($fptr, 6); // to display the content of the file
$content = fread ($fptr, filesize("myfile.txt"));
fclose($fptr); // cpu usuage km krne k liye
echo $content;


?>