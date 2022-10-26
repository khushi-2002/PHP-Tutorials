<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to updating data with the help of PHP</h1>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Unsuccessful connection".mysqli_connect_error());
}
else{
    echo "Succesful connection";

}

$sql = "Select * from contacts where username = 'khushi'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo "<br>";
echo $num;
echo "<br>";


// where clause to fetch the data
if($num>0){
    $no=1;
while($row = mysqli_fetch_assoc($result)){
    //echo $row['id'].") ". $row['username']. " ". $row['email']." having concern is ". $row['concern'];
    echo $no.") ". $row['username']. " ". $row['email']." having concern is ". $row['concern'];
    echo "<br>";
    $no = $no +1;

}
}

// Update data 
$sql = "update contacts set username = 'Rakesh Updated1' where id =1 ";
$result = mysqli_query($conn, $sql);

// updation query return true or false
// we want to print the number of rows affected

$aff = mysqli_affected_rows($conn);
echo "Affected rows are $aff";
echo"<br>";
if($result){
    echo "We updated the record succesfully";
}
else{
    echo "we couldn't updated the records";
}

?>