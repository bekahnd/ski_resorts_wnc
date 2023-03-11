<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
$page_title = 'Login';



// if($database === false) {
//   die("connection failed");
// } else {
//   echo "connection successful";
// }

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

  $sql = "SELECT * FROM member WHERE username = '".$username."' AND hashed_password = '".$password."'";

  $result = mysqli_query($database, $sql);

  $row = mysqli_fetch_array($result);

if(!$row) {
  echo "Login failed.";
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
 

 <h1>Login Form</h1>
       <form action="login.php" method="POST">
         <label>username</label>
         <input type="text" name="username" required><br>
         <label>password</label>
         <input type="password" name="password" required><br>
         <input type="submit" name="submit" value="login">
       </form>

 </body>
</html>


