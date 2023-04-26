<?php
include_once('../private/initialize.php'); ?>

<span id="gallery">
<?php
$page_title = 'Gallery';
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
?>
<h2><?php echo $page_title; ?></h2>
<!-- Button for users to add a post to the website -->
<a href="post.php" id="postButton">&#43; Create Post</a>
<div id="posts">
<?php
// Grabs all posts and displays them from newest to oldest with username and caption
$sql = "SELECT * FROM post INNER JOIN member ON post.member_id=member.member_id ORDER BY post_id DESC";
$result = mysqli_query($database, $sql);

if (mysqli_num_rows($result) > 0) {
  while($images = mysqli_fetch_assoc($result)) { 
?>
    <div id="alb">
      <img src="images/<?=$images['media_url']?>">
      <p><strong><?=$images['username']?></strong></p>
      <p><?=$images['caption']?></p>
    </div>
  <?php }
}
?>
</div>
</span>
<?php
  include(SHARED_PATH . '/public_footer.php');
?>
  </body>
</html>
