<?php
//what to do with the data

if (isset($_POST['submit']))
{
    $oder_id= $_POST['oder_id'];
    $delivery_address= $_POST['delivery_address'];
    $delivery_date= $_POST['delivery_date'];
    $delivery_date_formatted = date('Y-m-d', strtotime($delivery_date));
    $delivery_time= $_POST['delivery_time'];
    $delivery_method= $_POST['delivery_method'];
    $payment_method= $_POST['payment_method'];
    $oder_status= 0;


    //connect to database server
    include 'db.php';

    // write sql statment to insert data
    $sql = "INSERT INTO delivery (oder_id, delivery_address, delivery_date,	delivery_time, delivery_method,	payment_method,	oder_status)
        VALUES ('$oder_id', '$delivery_address', '$delivery_date_formatted', '$delivery_time', '$payment_method', '$oder_status')";

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