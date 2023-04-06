<?php
include_once('../../private/initialize.php');
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Admin Toggle Admin';

$tableName = "member";

if(isset($_POST['submit'])) {
  $id = $_POST['id'];

  $sql = "SELECT is_admin, username FROM $tableName WHERE member_id=$id";
  $result = mysqli_query($database, $sql);
  $row = $result->fetch_assoc();
  $is_admin = $row["is_admin"];
  $username = $row["username"];

  // Set new value to opposite of current value
  if($is_admin === '1') {
    $new_value = 0;
  } else {
    $new_value = 1;
  }
  $sql = "UPDATE " . $tableName . " SET is_admin=" . $new_value . " WHERE member_id=" . $id . "";
  $result = mysqli_query($database, $sql);

  // Message to display
  if($new_value === 1) {
    echo "<p>" . $username . " has been changed to admin member.</p>";
  } else {
    echo "<p>" . $username . " has been changed to general member.</p>";
  }
  echo "<button id='submit'><a href='" . url_for('public/admin/admin_home.php') . "'>&lt; &lt; Back to members list.</a></button>";
}

?>