<?php
include 'header.php';


if (isset($_POST['submit']))
{
    $member_id= $_POST['member_id'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $phone_number= $_POST['phone_number'];
    $email= $_POST['email'];
    $select_room= $_POST['select_room'];
    $number_of_guest= $_POST['number_of_guest'];
    $event_date= $_POST['event_date'];
    $start_time= $_POST['start_time'];
    $end_time= $_POST['end_time'];
    $menu_style= $_POST['menu_style'];
    $event_status= 0;

    // Calculate event charges based on form data
    $event_charges = calculateEventCharges($_POST);

    $vat_rate = 0.1;
    $vat_amount = $event_charges * $vat_rate;

    $total_price = $event_charges + $vat_amount;



    //connect to database server
    include 'db.php';

    // write sql statment to insert data
    $sql = "INSERT INTO event_booking (member_id, first_name, last_name, phone_number, email, select_room, number_of_guest, event_date, start_time, end_time, menu_style, event_status)
        VALUES ('$member_id','$first_name', '$last_name', '$phone_number', '$email', '$select_room', '$number_of_guest', '$event_date', '$start_time', '$end_time', '$menu_style', '$event_status')";

if ($conn->query($sql) === TRUE) {
    $event_id = $conn->insert_id; // Get the ID of the newly inserted event

    echo "<div style='padding-left: 600px; padding-top: 20px; padding-bottom: 20px'>";
    echo "<h1>Your event booking charges</h1><br>";
    echo "Customer Name: $first_name $last_name<br>";
    echo "Phone Number: $phone_number<br>";
    echo "Email: $email<br>";
    echo "Selected Room: $menu_style<br>";
    echo "Selected Date: $event_date<br>";
    echo "Selected Start Time: $start_time<br>";
    echo "Selected End Time: $end_time<br>";
    echo "Number of Guests: $number_of_guest<br>";
    echo "Selected Menu: $menu_style<br>";
    echo "VAT(): $vat_amount<br>";
    echo "Total Price (): $total_price<br>";

    echo "<a class='btn btn-primary btn-sm' href='manage_event.php?event_id=$event_id'>Edit Your Event</a>";
    
    echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
}

// Function to calculate event charges based on form data
function calculateEventCharges($formData) {
    // Implement your calculation logic here
    // For demonstration purposes, let's assume a simple calculation based on number of guests and menu selection
    $number_of_guest = $formData['number_of_guest'];
    $menu_style = $formData['menu_style'];

    // Define menu prices (you can retrieve these from the database)
    $menu_prices = array(
        'SriLankan' => 100,  // Price for Menu 1
        'Indian' => 150,  // Price for Menu 2
        'Malayasian' => 200,   // Price for Menu 3
        'Snack' => 200   // Price for Menu 4

        
    );

    // Check if the selected menu exists in the menu prices array
    if (array_key_exists($menu_style, $menu_prices)) {
        // If the menu exists, calculate the total charges based on the menu price and number of guests
        $menu_price = $menu_prices[$menu_style];
        $total_charges = $number_of_guest * $menu_price;
        return $total_charges;
    } else {
        // If the selected menu does not exist in the menu prices array, return an error or handle it accordingly
        return "Error: Invalid menu selection";
    }
}
include 'footer.php';

?>