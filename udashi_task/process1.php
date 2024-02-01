<?php
include 'header.php';
$Firstname= $_POST["Firstname"];
$Lastname= $_POST["Lastname"];

echo "Hello ". $Firstname." ".$Lastname.  ", You are welcome to my site.";

include 'footer.php';

?>