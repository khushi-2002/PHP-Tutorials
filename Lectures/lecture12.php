<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the date functions </h1>

    <?php
     $d = date("d j l"); // d--> jisme date 0,1 krke aati hai ar j me nhi aati
     $p = date ("S");
     $e = date ("F, j, y, g:i a");
     echo "Today's date is $e <br>";
     echo "Today's date is $p<br>";
     echo "Today date is $d<br>";
     $year = date("Y");
     echo "Copyright $year | All rights reserved <br>";

?>
</body>
</html>