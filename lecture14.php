<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Multidimensional arrays in php</h1>
    <?php
     
     $multidim =array(
         array(2,4,5,6),
         array(1,3,4,5),
         array(67,56,8,9),
         array(67,45,12,34)
     );

     //echo var_dump($multidim);
echo $multidim[1][2];

for ($i=0; $i < count($multidim); $i++) { 
    for ($j=0; $j <count($multidim[$i]) ; $j++) { 
        echo $multidim[$i][$j]." ";
    }
    echo "<br>";
}


//3D array:-
$arr3 = array(
array(
    array(1,2,3,4),
    array(1,2,3,5)
),

array(
    array(1,2,3,4),
    array(1,2,3,5)
)
);

for ($i=0; $i < count($arr3); $i++) {
    for ($j=0; $j <count($arr3[$i]) ; $j++) { 
        for ($k=0; $k < count($arr3[$i][$j]) ; $k++) { 
            echo $arr3[$i][$j][$k]." ";
        }
        echo "<br>";
    } 
    
}

?>
</body>
</html>