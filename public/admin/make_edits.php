<?php
include_once('../../private/initialize.php');
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Make Edits';
check_admin_login();

$tableName = "resort";

// Initializes variables based on POST submission
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $resortName = $_POST['resortName'];
  $description = $_POST['description'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $trailNumber = $_POST['trailNumber'];
  $weekendOpening = $_POST['weekendOpening'];
  $weekendClosing = $_POST['weekendClosing'];
  $weekdayOpening = $_POST['weekdayOpening'];
  $weekdayClosing = $_POST['weekdayClosing'];

  // Updates database with new values
  $sql = "UPDATE $tableName SET resort_name='$resortName', description='$description', address='$address', city='$city', zip='$zip', phone='$phone', trail_number='$trailNumber', opening_hour_weekend='$weekendOpening', closing_hour_weekend='$weekendClosing', opening_hour_weekday='$weekdayOpening', closing_hour_weekday='$weekdayClosing' WHERE resort_id=$id";
  $result = mysqli_query($database, $sql);
  echo "<h3>The changes have been made and saved to the database. Check below for current values.</h3>";
  echo "<p>Resort Name - " . $resortName . "</p>";
  echo "<p>Resort Description - " . $description . "</p>";
  echo "<p>Resort Address - " . $address . "</p>";
  echo "<p>Resort City - " . $city . "</p>";
  echo "<p>Resort Zip Code - " . $zip . "</p>";
  echo "<p>Resort Phone Number - " . $phone . "</p>";
  echo "<p>Resort Trail Number - " . $trailNumber . "</p>";
  echo "<p>Resort Weekend Opening Time - " . $weekendOpening . "</p>";
  echo "<p>Resort Weekend closing Time - " . $weekendClosing . "</p>";
  echo "<p>Resort Weekday Opening Time - " . $weekdayOpening . "</p>";
  echo "<p>Resort Weekday Closing Time - " . $weekdayClosing . "</p>";
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_index.php') . "' id='toggleA'>&lt; &lt; Back to home page.</a></button>";
}
?>