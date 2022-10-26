<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Associative arrays in php</h1>
    <?php
     
     $favcol = array(
         'khushi'=> 2000,
         'Priyadarshini'=>100,
         'Rahul'=>1200,
         'John'=> 1200,
         'Moussa'=>2000

     );

     echo $favcol['khushi']."<br>";
     echo $favcol['Priyadarshini']."<br>";
     echo $favcol['Rahul']."<br>";
     echo $favcol['Moussa']."<br>";
     echo $favcol['John']."<br>";

     
     foreach ($favcol as $key => $value) {
         echo "The salary of $key= ".$value."<br>";
        //  echo "$key"; valid syntax
     }
    

?>
</body>
</html>