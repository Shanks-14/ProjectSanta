<?php
//https://github.com/phprouter/main
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

any('/', 'index.php');

any('/login', 'login\login.php');

any('/register', 'signup\signup.php');