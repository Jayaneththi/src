<?php $title = "Event Booking";
include "header.php"
?>


<h2 class="text-center">Input Your Information Below:</h2>
<div class="container container-delivery">
<form name="form1" method="post" action="delivery_process.php">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label for="oder_id">Order ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="oder_id" placeholder="Enter your Order ID" name="order_id" required>
            </div>
            <div class="col-sm-2">
                <label for="delivery_address">Delivery Address:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="delivery_address" placeholder="Enter Delivery Address" name="delivery_address" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <label for="delivery_date">Delivery Date:</label>
            </div>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="delivery_date" name="delivery_date" required>
            </div>
            <div class="col-sm-2">
                <label for="delivery_time">Delivery Time:</label>
            </div>
            <div class="col-sm-4">
                <input type="time" class="form-control" id="delivery_time" name="delivery_time" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <label for="delivery_method">Select Delivery Method:</label>
            </div>
            <div class="col-sm-4">
                <select class="form-control" id="delivery_method" name="delivery_method">
                    <option value="FastDelivery">Fast Delivery</option>
                    <option value="NormalDelivery">Normal Delivery</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label for="payment_method">Select Payment Method:</label>
            </div>
            <div class="col-sm-4">
                <select class="form-control" id="payment_method" name="payment_method">
                    <option value="CashOnDelivery">Cash On Delivery</option>
                    <option value="OnlinePayment">Online Payment</option>
                </select>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row justify-content-center">
    <div class="col-sm-1 text-center">  
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
    </div>

</form>
</div>

     <?php $title = "Event Booking";
    include "footer.php"
    ?>