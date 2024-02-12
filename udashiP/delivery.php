<h2>Input Your Information Below:</h2>

<form name="form1" method="post" action="process1.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="oder_id	">Oder ID:</label>
                <input type="text" class="form-control" id="oder_id	" placeholder="Enter your Oder ID" name="oder_id" required>
            </div>
            <div class="col">
                <label for="delivery_address">Delivery Address :</label>
                <input type="text" class="form-control" id="delivery_address" placeholder="Enter Delivery Address" name="delivery_address" required>
            </div>

            <div class="col">
                <label for="delivery_date">Delivery Date :</label>
                <input type="text" class="form-control" id="delivery_date" placeholder="Enter Delivery Date" name="delivery_date" required>
            </div>

            <div class="col">
                <label for="delivery_time">Delivery Time :</label>
                <input type="text" class="form-control" id="delivery_time" placeholder="Enter Delivery Time" name="delivery_timee" required>
            </div>

            <div class="col">
                <label for="delivery_method">Select Delivery Method:</label>
                <select class="form-control" id="delivery_method" name="delivery_method">
                    <option value="FastDelivery">Fast Delivery</option>
                    <option value="NormalDelivery">Normal Delivery</option>
                    
                </select>
            </div>

            <div class="col">
                <label for="payment_method">Select Payment Method:</label>
                <select class="form-control" id="payment_method" name="payment_method">
                    <option value="cashOnDelivery">Cash On Delivery</option>
                    <option value="OnlinePayment">Online Payment</option>
                </select>
            </div>
        
        </div>

    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

     </form>