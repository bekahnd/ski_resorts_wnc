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
  $id = $_POST['id'];
  $sql = "DELETE FROM $tableName WHERE post_id=$id";
  $result = mysqli_query($database, $sql);

  echo "<p>Post was deleted successfully.</p>";
  echo "<a href='admin_gallery.php'><button>Back to gallery</button></a>";
}
?>