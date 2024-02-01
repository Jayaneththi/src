<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';
?>


<h3>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag</h3>

<form method= "post" action= "process1.php">
FirstName:<input type="text" name="Firstname" required> <br><br>
LastName:<input type="text" name="Lastname" required> <br><br>
<input type="Submit" value="Submit">
</form>



<?php include 'footer.php'; ?>