<?php
include_once('../../private/initialize.php');
$page_title = 'Edit Successful';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();
$tableName = "resort";

// Initializes variables based on POST submission
if(isset($_POST['submit'])) {
  $id = mysqli_real_escape_string($database, $_POST['id']);
  $resortName = mysqli_real_escape_string($database, $_POST['resortName']);
  $description = mysqli_real_escape_string($database, $_POST['description']);
  $address = mysqli_real_escape_string($database, $_POST['address']);
  $city = mysqli_real_escape_string($database, $_POST['city']);
  $zip = mysqli_real_escape_string($database, $_POST['zip']);
  $phone = mysqli_real_escape_string($database, $_POST['phone']);
  $trailNumber = mysqli_real_escape_string($database, $_POST['trailNumber']);
  $weekendOpening = mysqli_real_escape_string($database, $_POST['weekendOpening']);
  $weekendClosing = mysqli_real_escape_string($database, $_POST['weekendClosing']);
  $weekdayOpening = mysqli_real_escape_string($database, $_POST['weekdayOpening']);
  $weekdayClosing = mysqli_real_escape_string($database, $_POST['weekdayClosing']);

  // Updates database with new values
  $sql = "UPDATE $tableName SET resort_name='$resortName', description='$description', address='$address', city='$city', zip='$zip', phone='$phone', trail_number='$trailNumber', opening_hour_weekend='$weekendOpening', closing_hour_weekend='$weekendClosing', opening_hour_weekday='$weekdayOpening', closing_hour_weekday='$weekdayClosing' WHERE resort_id=$id";
  $result = mysqli_query($database, $sql);
  echo "<h3>The changes have been made and saved to the database. Check below for current values.</h3>";
  echo "<p>Resort Name - " . h($resortName) . "</p>";
  echo "<p>Resort Description - " . h($description) . "</p>";
  echo "<p>Resort Address - " . h($address) . "</p>";
  echo "<p>Resort City - " . h($city) . "</p>";
  echo "<p>Resort Zip Code - " . h($zip) . "</p>";
  echo "<p>Resort Phone Number - " . h($phone) . "</p>";
  echo "<p>Resort Trail Number - " . h($trailNumber) . "</p>";
  echo "<p>Resort Weekend Opening Time - " . h($weekendOpening) . "</p>";
  echo "<p>Resort Weekend closing Time - " . h($weekendClosing) . "</p>";
  echo "<p>Resort Weekday Opening Time - " . h($weekdayOpening) . "</p>";
  echo "<p>Resort Weekday Closing Time - " . h($weekdayClosing) . "</p>";
  echo "<p id='p_button'><a href='" . url_for('public/admin/admin_index.php') . "' id='button'>&lt; &lt; Back to home page.</a></p>";
}
?>
