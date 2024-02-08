<?php
$servername = "web-dev-env-main-db-1";
$username = "root";
$password = "password";
$dbname = "udashi";

// database connection 
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error){
    die("connection Failed:". $conn->connect_error);
}

?>