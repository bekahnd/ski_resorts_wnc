<?php
include_once('../../private/initialize.php');
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Edit Description';
check_admin_login();

$tableName = "resort";
?>

<h2>Edit Resort Description</h2>

<?php
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $sql = "SELECT * FROM $tableName WHERE resort_id=$id";
  $result = mysqli_query($database, $sql);
  // print_r($result);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      // print_r($row);
      $resortName = $row['resort_name'];
      $description = $row['description'];
      $address = $row['address'];
      $city = $row['city'];
      $zip = $row['zip'];
      $phone = $row['phone'];
      $trailNumber = $row['trail_number'];
      $weekendOpening = $row['opening_hour_weekend'];
      $weekendClosing = $row['closing_hour_weekend'];
      $weekdayOpening = $row['opening_hour_weekday'];
      $weekdayClosing = $row['closing_hour_weekday'];
    }
    // $row = mysqli_fetch_assoc($results);
  }
}
?>
<form method="post" action="make_edits.php">
  <label for="resortName">Resort Name:</label>
  <input type="text" name="resortName" id="resortName" value="<?php echo $resortName; ?>"><br>
  <label for="description">Description:</label>
  <textarea name="description" id="description" rows="4" cols="50"><?php if(isset($description)) echo $description; ?></textarea><br>
  <label for="address">Address:</label>
  <input type="text" name="address" id="address" value="<?php if(isset($address)) echo $address; ?>"><br>
  <label for="city">City:</label>
  <input type="text" name="city" id="city" value="<?php if(isset($city)) echo $city; ?>"><br>
  <label for="zip">Zip Code:</label>
  <input type="text" name="zip" id="zip" value="<?php if(isset($zip)) echo $zip; ?>"><br>
  <label for="phone">Phone Number:</label>
  <input type="text" name="phone" id="phone" value="<?php if(isset($phone)) echo $phone; ?>"><br>
  <label for="trailNumber">Trail Number:</label>
  <input type="text" name="trailNumber" id="trailNumber" value="<?php if(isset($trailNumber)) echo $trailNumber; ?>"><br>
  <label for="weekendOpening">Weekend Opening Hour:</label>
  <input type="text" name="weekendOpening" id="weekendOpening" value="<?php if(isset($weekendOpening)) echo $weekendOpening; ?>"><br>
  <label for="weekendClosing">Weekend Closing Hour:</label>
  <input type="text" name="weekendClosing" id="weekendClosing" value="<?php if(isset($weekendClosing)) echo $weekendClosing; ?>"><br>
  <label for="weekdayOpening">Weekday Opening Hour:</label>
  <input type="text" name="weekdayOpening" id="weekdayOpening" value="<?php if(isset($weekdayOpening)) echo $weekdayOpening; ?>"><br>
  <label for="weekdayClosing">Weekend Closing Hour:</label>
  <input type="text" name="weekdayClosing" id="weekdayClosing" value="<?php if(isset($weekdayClosing)) echo $weekdayClosing; ?>"><br>
  <input type='hidden' name='id' value='<?php if(isset($id)) echo $id; ?>'>
  <button type="submit" name="submit">Make Edits</button>
</form>


