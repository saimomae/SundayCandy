<?php
$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$FName = $_POST['FName'];
$LName =$_POST['LName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];

require_once('connect.php');

if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
}


$q = "UPDATE user SET ,$password='password' WHERE user_id = $user_id";
if (!$mysqli->query($q)) {
    echo "UPDATE failed. Error: " . $mysqli->error;
  }


$mysqli->close();
//redirect
header("Location: index.php");
?>
