<?php
include_once('../../private/initialize.php');
?>
<span id="gallery">
<?php
$page_title = 'Admin Gallery';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();
?>
<h2><?php echo $page_title; ?></h2>
<a href="../post.php" id="postButton">&#43; Create Post</a>
<div id="posts">
<?php
// Grabs all posts from database and displays them from newest to oldest
$sql = "SELECT * FROM post INNER JOIN member ON post.member_id=member.member_id ORDER BY post_id DESC";
$result = mysqli_query($database, $sql);

if (mysqli_num_rows($result) > 0) {
  while($images = mysqli_fetch_assoc($result)) { 
?>
    <div class="alb">
      <img src="../images/<?=$images['media_url']?>" height="350" width="350" alt="">
      <!-- Adds delete button for admin to delete a post when they hover over the image -->
      <form method="post" action="delete_post.php">
        <input type="hidden" name="id" value='<?=$images['post_id']?>'>
        <div class="delete_button">
          <button type="submit" name="submit">Delete Post</button>
        </div>
      </form>
      <p><strong><?=$images['username']?></strong></p>
      <p><?=$images['caption']?></p>
    </div>
  <?php }
}
?>
</div>
</span>

  </body>
</html>
</span>
