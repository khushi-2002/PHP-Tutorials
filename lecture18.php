<?php

$username = "root";
$servername = "localhost";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Sorry we failed to connect ".mysqli_connect_error());
}

echo "Your connection was succesful";
echo"<br>";
// create database

$mysql = "create database khushi1";
$result = mysqli_query($conn, $mysql);

if($result){
    echo "<br>Db has been created succesfully!";
}

else{
    echo "Unsuccessful because ".mysqli_error($conn);
}

?>