<?php include 'header.php';
include 'db.php';
?>

<!-- //Sql querry to fetch data from the table. -->
<?php 


$sql = "SELECT * from delivery";

// Execute the SQL query and store the result
$result = $conn->query($sql);


// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-responsive'>
            <thead>
                <tr>
                    <th>Delivery ID</th>
                    <th>Oder ID</th>
                    <th>Delivery Address</th>
                    <th>Delivery Date</th>
                    <th>Delivery Time</th>
                    <th>Delivery Method</th>
                    <th>Payment Method</th>
                    
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['delivery_id']}</td>
                <td>{$row['oder_id']}</td>
                <td>{$row['delivery_address']}</td>
                <td>{$row['delivery_time']}</td>
                <td>{$row['delivery_method']}</td>
                <td>{$row['payment_method']}</td>
                <td>{$row['oder_status']}</td>
                <td><a class='btn btn-primary btn-sm' href='admin_delivery_update.php?delivery_id=$row[delivery_id]'>Update</a></td>
                <td><a class='btn btn-danger btn-sm' href='admin_delivery_update.php?delivery_id=$row[delivery_id]'>Delete</a></td>
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