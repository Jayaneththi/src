<?php include 'header.php';
include 'db.php';
?>

<!-- //Sql querry to fetch data from the table. -->
<?php 


$sql = "SELECT * from event_booking";

// Execute the SQL query and store the result
$result = $conn->query($sql);


// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-responsive'>
            <thead>
                <tr>
                    <th>Event ID</th>
                    <th>member_id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>phone no</th>
                    <th>email</th>
                    <th>select room</th>                    
                    <th>no of guest</th>
                    <th>event date</th>
                    <th>start time</th>                    
                    <th>end time</th>
                    <th>menu style</th>
                    <th>event status</th>



                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['event_id']}</td>
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
                <td><a class='btn btn-primary btn-sm' href='admin_update.php?event_id=$row[event_id]'>Update</a></td>
                <td><a class='btn btn-danger btn-sm' href='admin_update.php?orderNo=$row[event_id]'>Delete</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>