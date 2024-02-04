<?php $title = "Exercise4";
$md= "Exercise4 ";
include "header.php"
?>

<div style="padding-left: 20px; padding-top: 20px; padding-bottom: 20px;">
<h5>4.1 Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h5>
<h5>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h5>
<br><br>

<div style="text-align: center;">
<form method="post">
        Name: <input type="text" name="name" required style=width:400px> <br><br>
        Age : <input type="number" name="age" required style=width:400px> <br><br>
        <button type="submit" name="submit" class="btn btn-primary">Check Eligibility</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];

        echo "<p>$name, you are " . ($age >= 18 ? "eligible" : "not eligible") . " for voting.</p>";
    }
    }
    ?>
    </div>
<br><br>


<h5>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h5>
<h6>It's August, so it's still holiday.<br>
Not August, this is Month-name so I don't have any holidays<br>
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h6></h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="month" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div style="text-align: center;">
            <label for="month" class="form-label">
                <?php 
                $month = date("F"); 
                echo "<p>Current Month: $month</p>";
                ?> 
                </label>            
        </div>
        <button type="submit" class="btn btn-primary">Check the month</button>
    </form>
</div>

<div style="text-align: center;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $month = date("F");

    switch ($month) {
        case "August":
            echo "<h5>It's August, so it's still a holiday.</h5>";
            break;
        default:
            echo "<h5>Not August, this is $month, so I don't have any holidays.</h5>";
    }
}
?>
</div>
<br><br>

<h5>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="multiplicationTable" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div style="text-align: center;">
            <label for="number1" class="form-label">Insert the Number:</label>
            <input type="text" class="form-control" name="number1" required style="width: 400px;"><br><br>
        </div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number1"])) {
    $number1 = isset($_POST["number1"]) ? $_POST["number1"] : "";

    for($i=0; $i<=$number1; $i++){
        echo "$i * $number1 = " . $i * $number1 . "<br>";

    }
}
?>
<br><br>
<h5>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n.(use form to get user input)</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="numberPrint" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div style="text-align: center;">
            <label for="number2" class="form-label">Insert the Number:</label><br><br>
            <input type="text" class="form-control" name="number2" required style="width: 400px;"><br><br>
        </div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number2"])) {
    $number2 = isset($_POST["number2"]) ? $_POST["number2"] : "";
    $i=1;
    while($i<=$number2){
        echo "number is " .$i . "<br>";
        $i++;
    }
}
?>
<br><br>

<h5>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="printArray" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div style="text-align: center;">
       <button type="submit" class="btn btn-primary">Print</button>
</form>
        </div>
</div>        

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $myarray=array("HTML", "CSS", "PHP", "JavaScript");
    foreach($myarray as $value){
    echo  $value."<br />";
    }
}
?>

</div>

<?php include 'footer.php'?>