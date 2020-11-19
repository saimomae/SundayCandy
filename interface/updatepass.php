<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once('connect.php');

if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
}


$q = "UPDATE user SET password='$password' WHERE username = $username";
if (!$mysqli->query($q)) {
    echo "UPDATE failed. Error: " . $mysqli->error;
  }


$mysqli->close();
//redirect
header("Location: index.php");
?>
