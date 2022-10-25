<?php

session_start();
session_unset(); // unset the sessions
session_destroy(); // destroy the session


echo "<br> You have been logged out";



?>