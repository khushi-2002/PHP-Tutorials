
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to selecting and displaying data from mysql</h1>
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

$sql = "select * from contacts";
$result = mysqli_query($conn,$sql);
echo "<br>";

// find the number of records returned
$num= mysqli_num_rows($result);
echo $num;
echo "<br>";

if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); // return associative array fetch row one by one and prints the result
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); // return associative array fetch row one by one and prints the result
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); // return associative array fetch row one by one and prints the result
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); // return associative array fetch row one by one and prints the result
    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); // return associative array fetch row one by one and prints the result
    // echo "<br>";

    // we can fetch in a better way using the while loop

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['id'].") ". $row['username']. " ". $row['email']." having concern is ". $row['concern'];
        echo "<br>";
    }
}

?>





