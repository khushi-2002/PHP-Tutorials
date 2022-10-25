
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome to For-each tutorial</h1>


<?php

$arr = array("banana", "Potato", "orange", "hui"); // Numeric array or Index array

for ($i=0; $i < count($arr) ; $i++) { 
    echo $arr[$i];
    echo "<br>";
}

// Better way

foreach ($arr as $value) {
    echo $value;
    echo "<br>";
}



?>
</body>
</html>


