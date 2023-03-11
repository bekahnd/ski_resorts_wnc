<?php

require('../private/initialize.php');
require_once(SHARED_PATH . '/public_header.php');

if(is_post_request()) {
  $args = $_POST['user'];
  $user = new User($args);
  $result = $user->save();

  if($result === true) {
    $new_id = $user->id;
    $_SESSION['message'] = 'The user was created successfully.';
    redirect_to(url_for('public/admin_home.php'));
  } else {
    // show errors
  }
} else {
  $user = new User;
}

?>

<h2>Create an Account</h2>
<form action="new.php" method="post">
  <label for="fname">*First Name:</label>
  <input type="text" name="fname" id="fname" value="" required><br>
  <label for="lname">*Last Name:</label>
  <input type="text" name="lname" id="lname" value="" required><br>
  <label for="uname">*Username:</label>
  <input type="text" name="uname" id="uname" value="" required><br>
  <label for="password">*Password:</label>
  <input type="password" name="password" id="password" required><br>
  <label for="confirm_password">*Confirm Password:</label>
  <input type="password" name="confirm_password" id="confirm_password" required><br>
  <label for="email">*Email</label>
  <input type="email" name="email" id="email" value="" required><br>
  <label for="state">*State:</label>
  <?php $sql = "SELECT state_id, state_abbreviation FROM state ";
  if($r_set=$database->query($sql)) {
    echo "<select name=state id=state required>";
    while($row=$r_set->fetch_assoc()) {
      echo "<option value=$row[state_id]>$row[state_abbreviation]</option>";
    }
    echo "</select>";
  } else {
    echo "error";
  } ?><br>
  <button type="submit" name="submit">Create Account</button>
  <p>Already have an account? Click <a href="login.php">here</a> to login.</p>

</form>