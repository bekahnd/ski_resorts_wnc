<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
$page_title = 'Login';

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $errors[] = '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  $sqlHash = "SELECT * FROM member WHERE username = '".$username."'";

  $result = mysqli_query($database, $sqlHash);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $the_hashed_password = $row['hashed_password'];    
  }

  $hashed_password = password_verify($password, $the_hashed_password);
  


if(!$hashed_password) {
  echo "Login failed.";
  echo $hashed_password;
} else {
  if($row["is_admin"] == 0) {
    $_SESSION["username"] = $username;
    $_SESSION["is_admin"] = 0;


    redirect_to('trails.php');
  } elseif($row["is_admin"] == 1) {
      $_SESSION["username"] = $username;
      $_SESSION["is_admin"] = 1;

      redirect_to('admin_home.php');
  } else {
    echo "username or password incorrect.";
  }
}
}
?>
 
  <div id="login">
    <h2>Login</h2>
    <form action="login.php" method="POST" id="loginForm">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <input type="submit" name="submit" value="Login" id="submit">
    </form>
    <p>Don't have an account yet? Click <a href="registration.php">here</a> to create one.</p>
  </div>

 </body>
</html>


