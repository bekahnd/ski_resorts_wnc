<?php

ob_start();

require_once('db_credentials.php');
require_once('db_functions.php');

$database = db_connect();