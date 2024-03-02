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
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $fetch_sql = "SELECT * FROM studentsinfo";
    $result = $conn->query($fetch_sql);

    echo "<table class='table table-striped table-responsive'>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Group Id</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>";

    
    if ($result->num_rows > 0) {
        // Loop through the result set and display data in rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>                
                <td>{$row['groupId']}</td>
                <td><a class='btn btn-primary btn-sm' href='updatesingle.php?'>Update</a></td>
                <td><a class='btn btn-danger btn-sm' href='updatesingle.php?'>Delete</a></td>
              </tr>";
        }
    } else {
    
        echo "<tr><td colspan='6'>No results found</td></tr>";
    }

    echo "</tbody></table>";

    // Close the database connection
    $conn->close();
}


include 'footer.php';
?>
