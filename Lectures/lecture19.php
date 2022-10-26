<?php

$servername = "localhost";
$username = "root";
$password="";
$database = "khushi1";


$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Unsuccessful ".mysqli_connect_error();
}

else{
    echo "Successful";
}

// create tables in the db
$sql ="create table table1 (
id int auto_increment,
first_name varchar(20) not null,
last_name varchar(15) not null,

primary key(id)
)";

$sql2 = mysqli_query($conn,$sql);

if($sql2){
    echo"<br>";
    echo "Successful!! ";
}
else{

    echo "Unsuccessful".mysqli_error($conn);
}
?>

