<?php
$a =90;
$b= 89;
$c = 78;

// if, else, elseif
if($a>$b){
    if($a>$c){
        echo "$a is the greatest";
    }
    else{
        echo "$c is the greatest";
    }
}
else{
    if($b>$c){
        echo "$b is the greatest";

    }
    else{
        echo "$c is the greatest";
    }
}

echo "<br>";

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