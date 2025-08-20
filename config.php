<?php

//host
$host = "localhost";

//dbname
$dbname = "auth-system";

//username
$username = "root";

//password
$password = "";

// Create connection
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

//f ($conn == true) {
//    echo "connected";
//} else {
//    echo "not connected";
//}
?>