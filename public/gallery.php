<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
$page_title = 'Gallery';
?>

<h2>Gallery</h2>
<a href="post.php" id="postButton">&#43; Create Post</a>
<div id="posts">
<?php
$sql = "SELECT * FROM post ORDER BY post_id DESC";
$result = mysqli_query($database, $sql);

if (mysqli_num_rows($result) > 0) {
  while($images = mysqli_fetch_assoc($result)) { 
?>
    <div id="alb">
      <img src="images/<?=$images['media_url']?>">
      <p><strong><?=$_SESSION['username']?></strong></p>
      <p><?=$images['caption']?></p>
    </div>
  <?php }
}
?>
</div>
  </body>
</html>
















