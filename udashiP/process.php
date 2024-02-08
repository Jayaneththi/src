<?php
//what to do with the data

if (isset($_POST['submit']))
{
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $phone_number= $_POST['phone_number'];
    $email= $_POST['email'];
    $select_room= $_POST['select_room'];
    $number_of_guest= $_POST['number_of_guest'];
    $event_date= $_POST['event_date'];
    $event_date_formatted = date('Y-m-d', strtotime($event_date));
    $start_time= $_POST['start_time'];
    $end_time= $_POST['end_time'];
    $menu_style= $_POST['menu_style'];
    $event_status= 0;



    //connect to database server
    include 'db.php';

    // write sql statment to insert data
    $sql = "INSERT INTO event_booking (first_name, last_name, phone_number, email, select_room, number_of_guest, event_date, start_time, end_time, menu_style, event_status)
        VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$select_room', '$number_of_guest', '$event_date_formatted', '$start_time', '$end_time', '$menu_style', '$event_status')";

    if ($conn-> query($sql)===TRUE){
        echo "Your data was recorded";
    }

    else{
        echo "Error:" .$sql. "<br>" . $conn-> error;
    }
    // close the database connection

    $conn-> close();



}


?>