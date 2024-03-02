<?php
$title= "Read Data";
include 'header.php';
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM event_booking";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Member ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Select Room</th>
                    <th>Number Of Guest</th>
                    <th>Event Date</th>
                    <th>Start time</th>
                    <th>End time</th>
                    <th>Menu Style</th>
                    <th>Event Status</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td> <a href='updatesingle.php?id=$row[event_id]' style='color:blue;'>$row[event_id]</a></td>
                <td>{$row['member_id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['email']}</td>
                <td>{$row['select_room']}</td>
                <td>{$row['number_of_guest']}</td>
                <td>{$row['event_date']}</td>
                <td>{$row['start_time']}</td>
                <td>{$row['end_time']}</td>
                <td>{$row['menu_style']}</td>
                <td>{$row['event_status']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}


// close the connection when done
$conn->close();

include 'footer.php';
?>

