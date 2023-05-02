<?php
require('../private/initialize.php');
// Log user out and redirect to login page.
session_start();
session_destroy();
redirect_to('login.php');
?>
