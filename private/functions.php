<?php
// Redirect page
function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function url_for($script_path) {
  // add the leading '/' if not already there
  if($script_path[0] != '/') {
    $script_path = '/' . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function h($string="") {
  return htmlspecialchars($string);
}

// Checks to see if a user is an admin user
// Use on pages that only allow admin
function check_admin_login() {
  if(!isset($_SESSION["username"])) {
    redirect_to(url_for("public/login.php"));
  } elseif($_SESSION['is_admin'] == 0) {
    // redirect_to(url_for('public/login.php'));
    echo ("<p>Must have admin privileges to see this page.</p>");
    echo ("<a href='../index.php'><button>Back to member home page</button></a>");
    die;
  }
}

// Checks to see if a user is a general user
// Use on pages that general users and admin can see
function check_member_login() {
  if(!isset($_SESSION["username"])) {
    echo ("<p>Please login <a href='login.php'>here</a> to see more information such as trail lists, what is currently open, prices, reviews and more! Don't have an account yet? No problem, create a free account <a href='registration.php'>here</a> to access these features.</p>");
    die;
    // redirect_to("login.php");
  } 
}

function check_logged_in() {
  if(!isset($_SESSION["username"])) {
    echo '<a href="' . url_for('public/login.php') . '">Login</a>';
    echo '<a href="' . url_for('public/registration.php') . '">Sign Up</a>';
  } else {
    echo '<a href="' . url_for('/public/logout.php') . '">Logout, ' . $_SESSION["username"] . '</a>';
  }
}

// Checks if there was a post request
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

// Display errors
function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\">";
    $output .= "Please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}

function loop_trails($array) {
  foreach($array as $key => $value) {
    echo "<li>" . $value . "<form method='post' action='toggle_trails.php'><input type='hidden' name='id' value='" . $key . "'><button type='submit' name='submit'>Mark Trail Closed</button></form></li>";
  }
}

?>