<?php
echo "Welcome to the world of cookies";
// cookies are nothing but the tags which use to fing the content of the user which they are interested in


// cookies (data category stores not that data sensitive)
// sessions (they are stored in the server and quite data sensitives)

// Syntax to set a cookie

setcookie("category", "Artists", time()+ 86400, "/" ); // time, full (page)
echo "<br>";
echo "Cookie is set!";
?>