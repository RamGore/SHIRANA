<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'shirana');

define('DB_HOST', 'localhost');
define('DB_USER', 'u667936270_4VLGtsaR6X18');
define('DB_PASS', 'Q#0/RV^l2');
define('DB_NAME', 'u667936270_eqi85fRXnjq4');

function connect()
{
  $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if (mysqli_connect_errno()) { 
    die("Failed to connect: " . mysqli_connect_error());
  }

  mysqli_set_charset($connect, "utf8");

  return $connect;
}

?>
