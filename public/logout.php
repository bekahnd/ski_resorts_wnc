<?php
require('../private/initialize.php');

session_start();

session_destroy();

redirect_to('login.php');

?>