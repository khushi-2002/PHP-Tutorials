<?php
$insert = FALSE;
if(isset($_POST['name'])){
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "Sorry for the incovenience, we cannot connection with the server due to some technical issues ". mysqli_connect_error();
}
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$no = $_POST['no'];
$des = $_POST['des'];

$sql = "Insert into users(name, age, gender, email, no, des, dt) values('$name', '$age', '$gender', '$email', '$no', '$des', current_timestamp())";


if ($conn-> query($sql)==TRUE){
    $insert = TRUE;
}
echo "$conn->error";
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <img class="img" src="thumb-1920-82317.jpg" alt="Image">
    <div class="container">
        
        <h1>Welcome to the Asthetic Trip Registration  Form</h1>
        <p>To confirm your ticket, Kindly add your details over here</p>
        <?php
        if($insert){
            echo "<p class='message'>Thanks for sharing the details with us, Welcome to the Asthetic trip! </p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name"  placeholder="Enter your name here">
            <input type="number" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="text" name="email" id="email" placeholder="Enter your emailId">
            <input type="text" name="no" id="phoneno" placeholder="Enter your Phone no">
            <textarea name="des" id="des" cols="30" rows="10" placeholder="Any Questions/doubts to us?"></textarea >

                <button class="btn">Submit</button>
        </form>
    </div>
</body>
</html>

