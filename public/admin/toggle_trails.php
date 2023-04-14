<?php
include_once('../../private/initialize.php');
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Admin Toggle Trails';
check_admin_login();

$tableName = "trail";

echo "<h2>Trail updated successfully</h2>.";

if(isset($_POST['submit'])) {
  $id = $_POST['id'];

  $sql = "SELECT is_open, trail_name FROM $tableName WHERE trail_id=$id";
  $result = mysqli_query($database, $sql);
  $row = mysqli_fetch_assoc($result);
  $is_open = $row["is_open"];
  $trail = $row["trail_name"];
  $is_open . "<br>";
  $trail . "<br>";

  // Set new value to opposite of current value for is_open
  if($is_open === '1') {
    $new_value = 0;
  } else {
    $new_value = 1;
  }
  $sql = "UPDATE " . $tableName . " SET is_open=" . $new_value . " WHERE trail_id=" . $id . "";
  $result = mysqli_query($database, $sql);

  // Message to display
  if($new_value === 1) {
    echo "<p>" . $trail . " has been changed to open.</p>";
  } else {
    echo "<p>" . $trail . " has been changed to closed.</p>";
  }
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_trails.php') . "' id='toggleA'>&lt; &lt; Back to trails list.</a></button>";
}
