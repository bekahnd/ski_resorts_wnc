<?php
require('../private/initialize.php');
$page_title = 'Create an Account';


?>
<?php

include_once(SHARED_PATH . '/public_header.php');

if(!$database) {
  echo("Connection Failed.");
} else {
  echo("Connection Successful!<br>");
}

if(is_post_request()) {
  $first_name = $_POST["fname"];
  $last_name = $_POST["lname"];
  $username = $_POST["uname"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  $email = $_POST["email"];
  $state_id = $_POST["state"];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $duplicate = mysqli_query($database, "SELECT * FROM member WHERE username = '$username' or email = '$email'");

  if(mysqli_num_rows($duplicate) > 0) {
    echo "Username or Email has already been taken.";
  } else {
    if($password == $confirm_password) {
      $sql = "INSERT INTO member (username, first_name, last_name, email, state_id, hashed_password) VALUES ('$username', '$first_name', '$last_name', '$email', '$state_id', '$hashed_password')";
      mysqli_query($database, $sql);
      var_dump($sql);
      redirect_to(url_for("public/index.php"));

    } else {
      echo "Passwords do not match.";
    }
  }
}

?>



<h2>Create an Account</h2>
<form action="" method="post">
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
