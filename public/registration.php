<?php
require('../private/initialize.php');
$page_title = 'Create an Account';


?>
<?php

include_once(SHARED_PATH . '/public_header.php');
// Assign variables based on user submission
if(is_post_request()) {
  $first_name = mysqli_real_escape_string($database, $_POST["fname"]);
  $last_name = mysqli_real_escape_string($database, $_POST["lname"]);
  $username = mysqli_real_escape_string($database, $_POST["uname"]);
  $password = mysqli_real_escape_string($database, $_POST["password"]);
  $confirm_password = mysqli_real_escape_string($database, $_POST["confirm_password"]);
  $email = mysqli_real_escape_string($database, $_POST["email"]);
  $state_id = mysqli_real_escape_string($database, $_POST["state"]);
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $duplicate = mysqli_query($database, "SELECT * FROM member WHERE username = '$username' or email = '$email'");

  // Personalized error messages
  // If no errors then insert new member into database
  if(mysqli_num_rows($duplicate) > 0) {
    echo "<p id='failed'>Username or Email has already been taken.</p>"; 
  } elseif($state_id == 'Choose State') {
    echo "<p id='failed'>Please choose your state.</p>";
  } else {
    if($password == $confirm_password) {
      $sql = "INSERT INTO member (username, first_name, last_name, email, state_id, hashed_password) VALUES ('$username', '$first_name', '$last_name', '$email', '$state_id', '$hashed_password')";
      mysqli_query($database, $sql);
      redirect_to(url_for("public/login.php"));

    } else {
      echo "<p id='failed'>Passwords do not match.</p>";
    }
  }
}


?>

<!-- Form for user registration -->
<div id="login">
  <h2>Create an Account</h2>
  <p>*Please fill out all fields.</p>
  <form action="" method="post">
    <input type="text" name="fname" id="fname" value="<?php if (isset($first_name)) echo h($first_name); ?>" placeholder="First Name" required><br>
    <input type="text" name="lname" id="lname" value="<?php if (isset($last_name)) echo h($last_name); ?>" placeholder="Last Name" required><br>
    <input type="text" name="uname" id="uname" value="<?php if (isset($username)) echo h($username); ?>" placeholder="Username" required><br>
    <input type="password" name="password" id="password" value="<?php if (isset($password)) echo h($password); ?>" placeholder="Password" required><br>
    <input type="password" name="confirm_password" id="confirm_password" value="<?php if (isset($confirm_password)) echo h($confirm_password); ?>" placeholder="Confirm Password" required><br>
    <input type="email" name="email" id="email" value="<?php if (isset($email)) echo h($email); ?>" placeholder="Email" required><br>
    <label for="state">*State:</label>
    <?php $sql = "SELECT state_id, state_abbreviation FROM state ";
    if($r_set=$database->query($sql)) {
      echo "<select name=state id=state>";
      echo "<option selected>Choose State</option>";
      while($row=$r_set->fetch_assoc()) {
        echo "<option value=$row[state_id]>$row[state_abbreviation]</option>";
      }
      echo "</select>";
    } else {
      echo "error";
    } ?><br>
    <button type="submit" name="submit">Create Account</button>
    
  </form>
  <!-- Link to login if user already has an account -->
  <p>Already have an account? Click <a href="login.php">here</a> to login.</p>
</div>
