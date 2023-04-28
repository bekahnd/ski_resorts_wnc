<?php
include_once('../../private/initialize.php');
$page_title = 'Edit Successful';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();

$table_name = "resort_pricing";
$resort_table = "resort";

// initialize variables based on POST submissions from edit_price.php
if(isset($_POST['submit'])) {
  $id = mysqli_real_escape_string($database, $_POST['id']);
  $new_price = mysqli_real_escape_string($database, $_POST['new_price']);
  $category = mysqli_real_escape_string($database, $_POST['category']);

  // Update database with new values
  $sql = "UPDATE $table_name SET price='$new_price' WHERE pricing_id='$id'";
  $result = mysqli_query($database, $sql);
  
  echo "<h3>The changes have been made and updated in the database.</h3>";
  echo "<p>Price for " . h($category) . " is now " . h($new_price) . "</p>";
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_prices.php') . "' id='toggleA'>&lt; &lt; Back to prices page.</a></button>";
} elseif(isset($_POST['submitTimes'])) {
  $resort_name = mysqli_real_escape_string($database, $_POST['resort_name']);
  $full_day_time = mysqli_real_escape_string($database, $_POST['full_day_time']);
  $half_day_time = mysqli_real_escape_string($database, $_POST['half_day_time']);
  $night_time = mysqli_real_escape_string($database, $_POST['night_time']);

  $sql = "UPDATE $resort_table SET full_day_time='$full_day_time', half_day_time='$half_day_time', night_time='$night_time' WHERE resort_name='$resort_name'";
  $result = mysqli_query($database, $sql);

  echo "<h3>The following changes have been made for " . $resort_name . ":</h3>";
  echo "Full Day Time: " . h($full_day_time) . "<br>";
  echo "Half Day Time: " . h($half_day_time) . "<br>";
  echo "Night Time: " . h($night_time) . "<br>";
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_prices.php') . "' id='toggleA'>&lt; &lt; Back to prices page.</a></button>";
} elseif(isset($_POST['submitSpecial'])) {
  $resort_name = mysqli_real_escape_string($database, $_POST['resort_name']);
  $special_time = mysqli_real_escape_string($database, $_POST['special_time']);

  $sql = "UPDATE $resort_table SET special_time='$special_time' WHERE resort_name='$resort_name'";
  $result = mysqli_query($database, $sql);

  echo "<h3>The following changes have been made for " . $resort_name . ":</h3>";
  echo "Special: " . h($special_time) . "<br>";
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_prices.php') . "' id='toggleA'>&lt; &lt; Back to prices page.</a></button>";
} elseif(isset($_POST['submitAges'])) {
  $resort_name = mysqli_real_escape_string($database, $_POST['resort_name']);
  $junior_age = mysqli_real_escape_string($database, $_POST['junior_age']);
  $adult_age = mysqli_real_escape_string($database, $_POST['adult_age']);

  $sql = "UPDATE $resort_table SET junior_age='$junior_age', adult_age='$adult_age' WHERE resort_name='$resort_name'";
  $result = mysqli_query($database, $sql);

  echo "<h3> The following changes have been made for " . $resort_name . "</h3>";
  echo "<p>Junior Age: " . h($junior_age) . "</p>";
  echo "<p>Adult Age: " . h($adult_age) . "</p>";
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_prices.php') . "' id='toggleA'>&lt; &lt; Back to prices page.</a></button>";
} else {
  echo "No post submitted.";
}
