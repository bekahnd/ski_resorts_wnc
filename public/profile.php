<?php
include_once('../private/initialize.php');
$page_title = 'Profile';
check_member_login();
include_once(SHARED_PATH . '/public_header.php');

?>

<h2><?php echo $page_title; ?></h2>
<?php
$username = mysqli_real_escape_string($database, $_SESSION['username']);
$sql = "SELECT username, first_name, last_name, email, state_abbreviation FROM member INNER JOIN state ON member.state_id=state.state_id WHERE username='".$username."'";
$result = mysqli_query($database, $sql);
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $user = h($row['username']);
    $first_name = h($row['first_name']);
    $last_name = h($row['last_name']);
    $email = h($row['email']);
    $state = h($row['state_abbreviation']);
  }
}
?>

<h3>Welcome Back, <?php echo ucfirst($first_name) . ' ' . ucfirst($last_name);?>!</h3>
<h4>User Information: </h4>
<p>Username: <?php echo $user;?></p>
<p>Email: <?php echo $email;?></p>
<p>State: <?php echo $state;?></p>

