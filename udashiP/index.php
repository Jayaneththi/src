<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required>
            </div>
            <div class="col">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required>
            </div>
            <div class="col">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control" id="phone_numbe" placeholder="Enter your phone_number" name="phone_number" required>
            </div>
            <div class="col">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            </div>

            <div class="col">
                <label for="select_room">Select Room:</label>
                <select class="form-control" id="select_room" name="select_room">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>

            <div class="col">
                <label for="number_of_guest">Number Of Guest:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter number of guest" name="number_of_guest" required>
            </div>

            <div class="col">
                <label for="event_date">Event Date:</label>
                <input type="text" class="form-control" id="event_date" placeholder="Enter event date" name="event_date" required>
            </div>

            <div class="col">
                <label for="start_time">Start Time:</label>
                <input type="text" class="form-control" id="start_time" placeholder="Enter event start time" name="start_time" required>
            </div>

            <div class="col">
                <label for="end_time">End Time:</label>
                <input type="text" class="form-control" id="start_time" placeholder="Enter event end time" name="end_time" required>
            </div>

            <div class="col">
                <label for="menu_style">Select Menu Style:</label>
                <select class="form-control" id="menu_style" name="menu_style">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            </div>

    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
