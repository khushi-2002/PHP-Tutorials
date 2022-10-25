<?php
// Require, include

// incluse gives the warning if we have any error in our file name and then print all the content without any difficulty
// But if we're using require then this file is compulsory and we need to include it 
// thus will not print the further content
//include '_db.php';
require '_db.php';

$query = "select *from contactdetails";
$ans = mysqli_query($conn, $query);

echo "<br>";
echo " Total No of records are ". mysqli_num_rows($ans);
echo "<br>";

while($row = mysqli_fetch_assoc($ans)){
    echo $row['id']."-> ".$row['username']." having emailid ".$row['email']." having concern ".$row['concern'];
    echo "<br>";
}
?>