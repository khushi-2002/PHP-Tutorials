<?php
$a =90;
$b= 89;
$c = 78;

// if, else, elseif
$max = $a;

if($b>$max){
    $max= $b;
}
if($c>$max){
    $max=$c;
}

echo $max . "<br>";

?>

<?php
$age=90;
if($age>25 and $age<65){
    echo "You can drive";
}
else{
    echo "You cannot drive";
}

?>