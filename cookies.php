<?php
// setcookie('name', 'value', 'expiration time', 'path =""');

echo "Welcome to the World of coookies <br>";

// Sysntax to set a cookie
// echo time();

setcookie("Category" , "Books", time() + 86400, "/");
echo "The cookie is set <br>";
?>