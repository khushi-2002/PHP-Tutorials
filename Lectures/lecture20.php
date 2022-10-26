<?php

$servername = "localhost";
$username ="root";
$password ="";
$database = "khushi1";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Unsuccesful".mysqli_error_connect();
}
echo "Successful";

// variables to be inserted as well

$first_name = "Prachi";
$last_name = "Sharma";
$sql = "insert into table1(first_name, last_name) values( '$first_name', '$last_name')";


$sql2 = mysqli_query($conn, $sql);

if(!$sql2){
    echo "<br>";
    echo "Unsucessful".mysqli_error($conn);
}
else{
    echo "<br>";
    echo "Successfully inserted";
}

?>