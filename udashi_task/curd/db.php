<?php
$servername = "web-dev-env-main-db-1";
$surename = "crudapp";
$password = "Finland@1234";
$dbname = "crudapp";

// database connection 
$conn = new mysqli($servername,$surename,$password,$dbname);

//check connection
if ($conn->connect_error){
    die("connection Failed:". $conn->connect_error);
}

?>