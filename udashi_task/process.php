<?php

include 'header.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];


    include 'db.php';

    
    $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupId)
            VALUES ('$fname', '$lname', '$city', '$groupid')";


    if ($conn->query($sql) === TRUE) {
        echo "<h3>New record created successfully</h3>";
        echo "<h3>If you need to update or delete record data use Read Data Button</h3>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $fetch_sql = "SELECT * FROM studentsinfo";
    $result = $conn->query($fetch_sql);

    echo 

    // Close the database connection
    $conn->close();
}


include 'footer.php';
?>
