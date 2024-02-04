<h1>
<?php
include 'header.php'; ?>


<div style="padding-left: 20px; padding-top: 20px; padding-bottom: 20px">
<?php
$Firstname= $_POST["Firstname"];
$Lastname= $_POST["Lastname"];

echo "Hello ". $Firstname." ".$Lastname.  ", You are welcome to my site.";
?>
</div>

<?php
include 'footer.php';

?>
</h1>