<?php

echo "Welcome to the concept of sessions";
echo"<br>";
// Used to manage different pages acrpss different pages


// verify login user info
session_start();

$_SESSION['username'] = "Khushi";
$_SESSION['password'] = "1234";
echo "Session is successful";


?>