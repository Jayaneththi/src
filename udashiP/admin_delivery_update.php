<?php
include 'header.php';
include 'db.php';

if (isset($_GET['delivery_id'])) {
    $delivery_id = $_GET['delivery_id'];
    $result = mysqli_query($conn,"SELECT * FROM delivery WHERE delivery_id = '$delivery_id'");
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    $row = mysqli_fetch_array($result);
}

?>

<!-- Your update form -->
<h2 class="text-center"> Update your information below: </h2>
<br>
<div class="container container-delivery">
    <form name="form1" method="post" action="">
        <div class="row">
            <div class="col-sm-1">
                <label for="delivery_id">Delivery ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="delivery_id" name="delivery_id" value="<?php echo $row['delivery_id']; ?>" readonly>
            </div>
            <div class="col-sm-1">
                <label for="oder_id">Order ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="oder_id" name="oder_id" value="<?php echo $row['oder_id']; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="delivery_date">Delivery Date :</label>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="delivery_date" name="delivery_date" value="<?php echo $row['delivery_date']; ?>">
                </div>
                <div class="col-sm-1">
                    <label for="delivery_time">Delivery Time:</label>
                </div>
                <div class="col-sm-4">
                    <input type="time" class="form-control" id="delivery_time" name="delivery_time" value="<?php echo $row['delivery_time']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="delivery_method">Delivery Method:</label>
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="delivery_method" name="delivery_method">
                        <option value="NormalDelivery" <?php if($row['delivery_method'] == 'NormalDelivery') echo 'selected'; ?>>Normal Delivery</option>
                        <option value="FastDelivery" <?php if($row['delivery_method'] == 'FastDelivery') echo 'selected'; ?>>Fast Delivery</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <label for="payment_method">Payment Method:</label>
                </div>
                <div class="col-sm-4">
                     <select class="form-control" id="payment_method" name="payment_method">
                        <option value="CashOnDelivery" <?php if($row['payment_method'] == 'CashOnDelivery') echo 'selected'; ?>>Cash On Delivery</option>
                        <option value="OnlinePayment" <?php if($row['payment_method'] == 'OnlinePayment') echo 'selected'; ?>>Online Payment</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-sm-1 text-center">  
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
            <br>

            <div class="col-sm-1 text-center">  
                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
            </div>
        </div>
    </form>
</div>


<?php
if (isset($_POST['submit'])) {
    
    $oder_id = $_POST['oder_id'];
    $delivery_date = $_POST['delivery_date'];
    $delivery_time = $_POST['delivery_time'];
    $delivery_method = $_POST['delivery_method'];
    $payment_method = $_POST['payment_method'];
    
    $query = mysqli_query($conn, "UPDATE delivery
                              SET 
                                  oder_id = '$oder_id',
                                  delivery_date = '$delivery_date',
                                  delivery_time = '$delivery_time',
                                  delivery_method = '$delivery_method',
                                  payment_method = '$payment_method'
                              WHERE delivery_id='$delivery_id'");

    if (!$query) {
        echo "Error updating record: " . mysqli_error($conn);
    } else {
        echo "Record updated successfully";
    }
}

if (isset($_POST['delete']))
{
    $query = mysqli_query($conn,"DELETE FROM delivery WHERE delivery_id='$delivery_id'");
    if($query)
    {
      echo "Record Deleted with id: $delivery_id <br>";
      // if you want to redirect to update page after updating
      //header("location: update.php");
    }
      else 
      { 
        echo "Record Not Deleted";
      }
      
}

$conn->close();
?>