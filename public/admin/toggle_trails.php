<?php
include_once('../../private/initialize.php');
$page_title = 'Admin Toggle Trails';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();

$table_name = "trail";

echo "<h2>Trail updated successfully</h2>";

if(isset($_POST['submit'])) {
  $trail_name = mysqli_real_escape_string($database, $_POST['trail_name']);

  $sql = "SELECT is_open FROM $table_name WHERE trail_name='$trail_name'";
  $result = mysqli_query($database, $sql);
  $row = mysqli_fetch_assoc($result);
  $is_open = h($row['is_open']);

  if($is_open === '1') {
    $new_value = 0;
  } else {
    $new_value = 1;
  }
  $sql = "UPDATE $table_name SET is_open=$new_value WHERE trail_name='$trail_name'";
  $result = mysqli_query($database, $sql);
     
    // Message to display
  if($new_value === 1) {
    echo "<p>" . $trail_name . " has been changed to open.</p>";
  } else {
    echo "<p>" . $trail_name . " has been changed to closed.</p>";
  }
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_trails.php') . "' id='toggleA'>&lt; &lt; Back to trails list.</a></button>";
}