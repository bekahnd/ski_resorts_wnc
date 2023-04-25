<?php
include_once('../private/initialize.php');
$page_title = 'Share Post';
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
?>

<h2>Post</h2>
<?php
if (isset($_GET['error'])): ?>
  <p><?php echo $_GET['error'] ?></p>
  <?php endif ?>
  <!-- Form fro user to upload photo -->
<form action="upload.php"method="post" enctype="multipart/form-data">
  <label id="media">Upload photo or video here.</label>
  <input type="file" id="media" name="media"><br>
  <label id="caption">Create a caption.</label>
  <input type="text" id ="caption" name="caption" placeholder="caption"><br>

  <!-- Drop down for resorts -->
  <?php
  $sql = "SELECT resort_id, resort_name FROM resort";
  if($r_set=$database->query($sql)) {
    echo "<select name=resort id=resort required>";
    echo "<option selected>Choose Resort</option>";
    while($row=$r_set->fetch_assoc()) {
      echo "<option value=$row[resort_id]>$row[resort_name]</option>";
    } 
    echo "</select>";
  } else {
      echo "error";
    } ?><br>
    <input type="submit" name="submit" value="Post" id="submit">
</form>