<?php
$title = "Exercise3";
include 'header.php';
?>

<div style="padding-left: 20px; padding-top: 20px; padding-bottom: 20px">
<h4>3.1 Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h4>
<h4>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag</h4>
<h4>3.3 Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your <head> tag.</h4>
<br><br>
<div style="text-align: center;">
<form method= "post" action= "process1.php">
FirstName:<input type="text" name="Firstname" required style=width:400px> <br><br>
LastName:<input type="text" name="Lastname" required style=width:400px> <br><br>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>

<br><br>
<h4>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet</h4>
<?php
    $g1=5;
    $g2=4;
    $g3=5;
    ?>
    <table class="table table-striped" style="max-width: 600px;">
    <thead class="table-header-color">
        <tr><th>S.n</th><th>Name</th> <th>Grade</th>
        <tr>
        </thead>

        <tbody>
        <tr class="table-row-color">
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1?></td>
        </tr>
        <tr class="table-row-color">
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2?></td>
        </tr>
        <tr class="table-row-color">
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3?></td>
        </tr>
    </table>
    </body>
    <br><br>

    <h4>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string</h4>

<?php
    $str1 = "Hello";
    $str2 = "World";

    $joinedString = $str1 . " " . $str2;

     echo "Joined String: " . $joinedString . "<br>";

     echo "Length of the joined string: " . strlen($joinedString);
?>
<br><br>

<h4>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h4>
<?php

    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "The sum of $num1, $num2, and $num3 is: $sum";
?>

</div>
<br><br>
<h4>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER. Predefined Variables</h4>
<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "Your browser is: " . $browser;
?>
<br><br>
<h4>3.8 File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time Predefined Variables</h4>
<br><br>
</div>

<?php
include 'footer.php'; ?>