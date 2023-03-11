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
    redirect_to("login.php");
  } elseif($_SESSION['is_admin'] == 0) {
    redirect_to('login.php');
  }
}

// Checks to see if a user is a general user
// Use on pages that general users and admin can see
function check_member_login() {
  if(!isset($_SESSION["username"])) {
    redirect_to("login.php");
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

?>