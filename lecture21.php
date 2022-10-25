
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact Us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpt/lecture21.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
// post directly send the information to the server without dispalying it on the link
// get shows the parameter entered by the user in the link




if ($_SERVER['REQUEST_METHOD']== 'POST'){ // isset method is used to check whether the variable is set or not while server method helps to check
  // whether the request is of post or get
  $name = $_POST['name'];
  $email = $_POST['email'];
  $description = $_POST['desc'];
 
 
  

// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "contactus";

$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
   die("Sorry we failed to connect ".mysqli_connect_error());
  
}

else{
  $sql = "insert into contacts(username, email, concern) values('$name','$email','$description')";
  $result = mysqli_query($conn,$sql);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>SUCCESS! </strong> Your entry has been submitted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  else{
    //echo "The record was not inserted successfully ".mysqli_error($conn);
    
    // In case we got any error while inserting the data thus it'll shows us like this

    // -- why it's not
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>ERROR! </strong> Your entry has been not submitted successfully due to some technical issues, kindly regret our inconvinience
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
  }
}

}


?>
<div class="container mt-3">
  <h1>Contact us for your concern</h1>
<form action="/phpt/lecture21.php" method="post"> 
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="pass" class="form-label">Description</label>
    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



  </body>
</html>

