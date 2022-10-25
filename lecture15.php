<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the scope of the variables in PHP </h1>

    <?php
    $a=90; // Global variable
     function printline(){
        // $a=96; // Local variable
        global $a; // global variable can be accessible with the help of global keyword
         echo "The value of the variable is $a";
     }
    
    echo var_dump($GLOBALS); // print all the global variables in php
    echo "<br>";
    echo var_dump($GLOBALS["a"]); // super global variables
    echo var_dump($_POST); // global post variable
    echo printline();


?>
</body>
</html>