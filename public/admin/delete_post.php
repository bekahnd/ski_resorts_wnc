<?php
include_once('../../private/initialize.php');
$page_title = 'Delete Post';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();
$tableName = "post";
?>

<!-- Deletes post from gallery and displays success message. -->
<h2>Delete Post</h2>
<?php
if(isset($_POST['submit'])) {
  $id = mysqli_real_escape_string($database, $_POST['id']);
  $sql = "DELETE FROM $tableName WHERE post_id=$id";
  $result = mysqli_query($database, $sql);

  echo "<p>Post was deleted successfully.</p>";
  echo "<p id='p_button'><a href='" . url_for('public/admin/admin_gallery.php') . "' id='button'>&lt; &lt; Back to gallery.</a></p>";
}
?>
