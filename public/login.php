<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
$page_title = 'Login';

// Initializes username and password based on user submission
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $errors[] = '';

  // Validations for blank username and password
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  // Get username and matching hashed password from database and checks it
  $sqlHash = "SELECT * FROM member WHERE username = '".$username."'";

  $result = mysqli_query($database, $sqlHash);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $the_hashed_password = $row['hashed_password'];    
  }

  $hashed_password = password_verify($password, $the_hashed_password);
  

// Error messages
// If no errors, checks whether user is an admin or general user and redirects to appropriate page
if(!$hashed_password) {
  if(!$the_hashed_password) {
    echo "<p id='failed'>Username not found.</p>";
  } else {
  echo "<p id='failed'>Username or password incorrect.</p>";
  // echo $hashed_password;
} } else {
  if($row["is_admin"] == 0) {
    $_SESSION["username"] = $username;
    $_SESSION["is_admin"] = 0;


    redirect_to('profile.php');
  } elseif($row["is_admin"] == 1) {
      $_SESSION["username"] = $username;
      $_SESSION["is_admin"] = 1;

      redirect_to(url_for('public/admin/admin_home.php'));
  } else {
    echo "username or password incorrect.";
  }
}
}
?>
 <!-- Display Login form  -->
  <div id="login">
    <h2>Login</h2>
    <form action="login.php" method="POST" id="loginForm">
      <input type="text" name="username" value="<?php if (isset($username)) echo $username; ?>" placeholder="Username" required><br>
      <input type="password" name="password" value="<?php if (isset($password)) echo $password; ?>" placeholder="Password" required><br>
      <input type="submit" name="submit" value="Login" id="submit">
    </form>
    <p>Don't have an account yet? Click <a href="registration.php">here</a> to create one.</p>
  </div>

 </body>
</html>
