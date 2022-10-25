<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "khushi1";

$conn= mysqli_connect($servername, $username, $password,$database);
if($conn){
    echo "Connection established!!";
    echo"<br>";
}
else{
    die("Connection Unsuccesful". mysqli_connect_error($conn));
}

$sql = "delete from table1 where first_name= 'Prachi' limit 3";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo"Affected rows are ---> $aff";
echo"<br>";

if($result){
    echo "Deleted succesfully";
}
else{
    $err = mysqli_error($conn);
    echo"Unsuccesful cause of this error---> $err";
}
echo mysqli_error($conn);

?>