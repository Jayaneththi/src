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

<h3>3.4</h3>
<?php
    $g1=5;
    $g2=4;
    $g3=5;
    ?>
    <table class="table-striped">
        <tr><th>S.n</th><th>Name</th> <th>Grade</th>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3?></td>
        </tr>
    </table>


    <h3>3.5</h3>

<?php
    $str1 = "Hello";
    $str2 = "World";

    $joinedString = $str1 . " " . $str2;

     echo "Joined String: " . $joinedString . "<br>";

     echo "Length of the joined string: " . strlen($joinedString);
?>

<h3>3.6</h3>
<?php

    $num1 = 298;
    $num2 = 234;
    $num3 = 46;

// Add up the numbers
    $sum = $num1 + $num2 + $num3;

// Output the result
    echo "The sum of $num1, $num2, and $num3 is: $sum";
?>




<?php include 'footer.php'; ?>