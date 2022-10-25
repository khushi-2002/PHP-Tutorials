<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Unsuccesful connection". mysqli_connect_error());
    
}
else{
    echo "Connection was succesfulll";
}

?>