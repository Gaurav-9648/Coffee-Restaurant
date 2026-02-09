<?php
// Password you want
$password = "admin123";

// Generate hashed password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Show the hash
echo "Your hashed password is: <br><br>";
echo $hash;
?>
