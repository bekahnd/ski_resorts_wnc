<?php
include_once('../../private/initialize.php');
$page_title = 'Admin Toggle Admin';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();

$tableName = "member";

if(isset($_POST['submit'])) {
  $id = mysqli_real_escape_string($database, $_POST['id']);

  // grabs admin status and username from database
  $sql = "SELECT is_admin, username FROM $tableName WHERE member_id=$id";
  $result = mysqli_query($database, $sql);
  $row = $result->fetch_assoc();

  $is_admin = h($row["is_admin"]);
  $username = h($row["username"]);

  // Set new admin value to opposite of current value (toggle) and update the database
  if($is_admin === '1') {
    $new_value = 0;
  } else {
    $new_value = 1;
  }
  $sql = "UPDATE " . $tableName . " SET is_admin=" . $new_value . " WHERE member_id=" . $id . "";
  $result = mysqli_query($database, $sql);

  // Display confirmation message
  if($new_value === 1) {
    echo "<p>" . $username . " has been changed to admin member.</p>";
  } else {
    echo "<p>" . $username . " has been changed to general member.</p>";
  }
  // button to go back to members list (admin_home)
  echo "<button id='toggle'><a href='" . url_for('public/admin/admin_home.php') . "' id='toggleA'>&lt; &lt; Back to members list.</a></button>";
}

?>