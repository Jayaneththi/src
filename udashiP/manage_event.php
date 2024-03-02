<?php
include 'header.php';
include 'db.php';

if(isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];
    $result = mysqli_query($conn,"SELECT * FROM event_booking WHERE event_id = '$event_id'");
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
<div class="container container-eventBooking">
    <form name="form1" method="post" action="">
        <div class="row">
            <div class="col-sm-1">
                <label for="event_id">Event ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="event_id" name="event_id" value="<?php echo $row['event_id']; ?>" readonly>
            </div>
            <div class="col-sm-1">
                <label for="member_id">Member ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="member_id" name="member_id" value="<?php echo $row['member_id']; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="first_name">First Name:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>">
                </div>
                <div class="col-sm-1">
                    <label for="last_name">Last Name:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="phone_number">Phone Number:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $row['phone_number']; ?>">
                </div>
                <div class="col-sm-1">
                    <label for="email">Email:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="select_room">Select Room:</label>
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="select_room" name="select_room">
                        <option value="BBCAP19" <?php if($row['select_room'] == 'BBCAP19') echo 'selected'; ?>>BBCAP19</option>
                        <option value="BBCAP20" <?php if($row['select_room'] == 'BBCAP20') echo 'selected'; ?>>BBCAP20</option>
                        <option value="BBCAP21" <?php if($row['select_room'] == 'BBCAP21') echo 'selected'; ?>>BBCAP21</option>
                        <option value="BBCAP22" <?php if($row['select_room'] == 'BBCAP22') echo 'selected'; ?>>BBCAP22</option>
                        <option value="Others" <?php if($row['select_room'] == 'Others') echo 'selected'; ?>>Others</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <label for="number_of_guest">Number Of Guest:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="number_of_guest" name="number_of_guest" value="<?php echo $row['number_of_guest']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="event_date">Event Date:</label>
                </div>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="event_date" name="event_date" value="<?php echo $row['event_date']; ?>">
                </div>
                <div class="col-sm-1">
                    <label for="start_time">Start Time:</label>
                </div>
                <div class="col-sm-4">
                    <input type="time" class="form-control" id="start_time" name="start_time" value="<?php echo $row['start_time']; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="end_time">End Time:</label>
                </div>
                <div class="col-sm-4">
                    <input type="time" class="form-control" id="end_time" name="end_time" value="<?php echo $row['end_time']; ?>">
                </div>
                <div class="col-sm-1">
                    <label for="menu_style">Select Menu Style:</label>
                </div>
                <div class="col-sm-4">
                    <select class="form-control" id="menu_style" name="menu_style">
                        <option value="SriLankan" <?php if($row['menu_style'] == 'SriLankan') echo 'selected'; ?>>Sri Lankan</option>
                        <option value="Indian" <?php if($row['menu_style'] == 'Indian') echo 'selected'; ?>>Indian</option>
                        <option value="Malayasian" <?php if($row['menu_style'] == 'Malayasian') echo 'selected'; ?>>Malayasian</option>
                        <option value="Snack" <?php if($row['menu_style'] == 'Snack') echo 'selected'; ?>>Snack</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-1 text-center">  
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
        <div class="col-sm-1 text-center">  
                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
            </div>
        </div>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $member_id = $_POST['member_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $select_room = $_POST['select_room'];
    $number_of_guest = $_POST['number_of_guest'];
    $event_date = $_POST['event_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $menu_style = $_POST['menu_style'];
    $event_status = 0;

    $query = mysqli_query($conn, "UPDATE event_booking 
                                  SET 
                                      member_id = '$member_id',
                                      first_name = '$first_name',
                                      last_name = '$last_name',
                                      phone_number = '$phone_number',
                                      email = '$email',
                                      select_room = '$select_room',
                                      number_of_guest = '$number_of_guest',
                                      event_date = '$event_date',
                                      start_time = '$start_time',
                                      end_time = '$end_time',
                                      menu_style = '$menu_style',
                                      event_status = '$event_status'
                                  WHERE event_id='$event_id'");

    if (!$query) {
        echo "Error updating record: " . mysqli_error($conn);
    } else {
        echo "Record updated successfully";
    }
}

if (isset($_POST['delete']))
{
    $query = mysqli_query($conn,"DELETE FROM event_booking WHERE event_id='$event_id'");
    if($query)
    {
      echo "Record Deleted with id: $event_id <br>";
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