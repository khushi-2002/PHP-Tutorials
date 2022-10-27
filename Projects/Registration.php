<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <nav class="navbar navbar-expand-lg text-bg-info p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpt/PHP-TUTORIALS/Projects/Registration.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <body>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $comment = $_POST['comment'];


  
$servername = "localhost";
$username = "root";
$password = "";
$database = "registration";

// $conn = mysqli_connect($servername, $username, $password);
// if(!$conn){
//   die("Sorry, we failed to connect with database ". mysqli_connect_error());
// }

/*

Created Database
$sql = "Create database registration";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Query is successful <br>";
}
else{
  echo "Query is not succesful because of ".mysqli_error($conn). "<br>";
}

*/

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
  die("Sorry, we failed to connect with database ". mysqli_connect_error());
}


/*
$sql = "create table contacts(
  sno int auto_increment,
  name varchar(30),
  email varchar(40),
  password varchar(40),
  comment varchar(40),
  primary key(sno)

)";

$result = mysqli_query($conn, $sql);
if($result ){
  echo "Executed <br>";
}
else{
  echo "Connection failed: " .mysqli_error($conn);
}
*/

else{
$sql = "INSERT INTO `contacts` (`name`, `email`, `password`, `comment`) VALUES ('$name', '$email', '$password', '$comment')";
$result = mysqli_query($conn, $sql);


if($result ){
  echo '<div class="alert alert-success" role="alert">
    Your details have been saved succesfully
  </div>';
}
else{
  echo '<div class="alert alert-danger" role="alert">
    Ops! There is something wrong, Please try again later
  </div>';
}
}
}

?>
    
    <div class="container mt-5">
    <h1 >Please Register to your account</h1>
<form action="/Phpt/PHP-TUTORIALS/Projects/Registration.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Additional Comments? </label>
    <textarea name="comment" id="comment" cols="50" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>