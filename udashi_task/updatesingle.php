<?php
include 'header.php';
include 'db.php';

// Initialize $row variable to null
$row = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id = '$id'");
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    // Fetch the row only if the result is not null
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
    }
}

?>

<h2 class="text-center"> Update your information below: </h2>
<br>
<div class="container container-student">
    <form name="form1" method="post" action="">
        <div class="row">
            <div class="col-sm-1">
                <label for="id">Student ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="id" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>" readonly>
            </div>
            <div class="col-sm-1">
                <label for="first_name">First Name:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo isset($row['first_name']) ? $row['first_name'] : ''; ?>">
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="last_name">Last Name:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo isset($row['last_name']) ? $row['last_name'] : ''; ?>">
                </div>
                <div class="col-sm-1">
                    <label for="city">City:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="city" name="city" value="<?php echo isset($row['city']) ? $row['city'] : ''; ?>">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-1">
                    <label for="groupId">Group ID:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="groupId" name="groupId" value="<?php echo isset($row['groupId']) ? $row['groupId'] : ''; ?>">
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
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $groupId = $_POST['groupId'];
    
    $query = mysqli_query($conn, "UPDATE studentsinfo
                              SET 
                                  first_name = '$first_name',
                                  last_name = '$last_name',
                                  city = '$city',
                                  groupId = '$groupId'
                              WHERE id='$id'");

    if (!$query) {
        echo "Error updating record: " . mysqli_error($conn);
    } else {
        echo "Record updated successfully";
    }
}

if (isset($_POST['delete'])) {
    $query = mysqli_query($conn,"DELETE FROM studentsinfo WHERE id='$id'");
    if($query) {
        echo "Record Deleted with id: $id <br>";
    } else { 
        echo "Record Not Deleted";
    }
}

$conn->close();

include 'footer.php';
?>
