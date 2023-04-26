<?php
include_once('../private/initialize.php');
$page_title = 'Upload';
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
?>

<?php
// Check if post was submitted
if (isset($_POST['submit']) && isset($_FILES['media'])) {
  echo "<pre>";
  print_r($_FILES['media']);
  echo "</pre>";

  // Add username of user who made post
  $username = mysqli_real_escape_string($database, $_SESSION['username']);
  echo "username: " . h($username);
  echo "<br>";

  $sqlId = "SELECT member_id FROM member WHERE username= '".h($username)."'";

  $resultId = mysqli_query($database, $sqlId);

  $member_id = $resultId->fetch_array()[0] ?? '';

  echo "member id: " . h($member_id);

  echo "<br>";

  // Initialize variables base on what user submitted
  $resort_id = mysqli_real_escape_string($database, $_POST['resort']);
  echo "resort id: " . h($resort_id);
  $caption = mysqli_real_escape_string($database, $_POST['caption']);
  $img_name = $_FILES['media']['name'];
  $img_size = $_FILES['media']['size'];
  $tmp_name = $_FILES['media']['tmp_name'];
  $error = $_FILES['media']['error'];

  // Create error specialized messages and insert to database if no errors
  if ($error === 0) {
    if ($img_size > 500000) {
      $em = "Sorry, your file is too large.";
      redirect_to('post.php?error='.$em);
    } elseif($resort_id == 'Choose Resort') {
      $em = "Please choose the resort your post corresponds with. Do not see it listed? Choose other.";
      redirect_to('post.php?error='.$em);
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);
      
      $allowed_exs = array("jpg", "jpeg", "png", "mov");

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = 'images/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "INSERT INTO post(resort_id, member_id, caption, media_url) VALUES ('$resort_id', '$member_id', '$caption', '$new_img_name')";
        mysqli_query($database, $sql);
        redirect_to('gallery.php');

      } else {
        $em = "You can't upload files of this type. Accepted file types are jpg, jpeg, png, mov.";
        redirect_to('post.php?error='.$em);
      }
    }

  } else {
    $em = "unknown error occurred!";
    redirect_to('post.php?error='.$em);
  }

} else {
  echo "";
}

?>