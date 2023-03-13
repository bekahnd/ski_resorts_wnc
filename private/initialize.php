<?php

ob_start();

session_start();

// Assign file paths to constants to better organize urls
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

// Define project root
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public');
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root); 


// Require necessary files
require_once('db_credentials.php');
require_once('functions.php');
require_once('db_functions.php');
require_once('validation_functions.php');

$page_title = '';

$database = db_connect();


?>