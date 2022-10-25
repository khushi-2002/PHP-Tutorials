<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to the stage where we are ready to get connected to a database</h2>

    <?php
    /* ways to connect to mysql database
      1. Mysqli(mysql improved) extension----> a) functional (procedural) and b) object oriented---> works only with mysqli
      2. PDO php data objects---> works with many databases
    */

    // connecting to the databases we required three things
    $servername = "localhost";
    $username = "root";
    $password = "";

    // create a connection

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){ // if connection is not true then use die function
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    echo "Connection was succesfull";


?>
</body>
</html>