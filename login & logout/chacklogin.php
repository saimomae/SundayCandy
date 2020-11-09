<?php
$username = $_POST['username'];
$passwd = $_POST['passwd'];
require_once('connect.php');

$q= "SELECT * FROM user WHERE username = '$username'  AND password = '$passwd'";

$result = $mysqli->query($q);
  // if (!$result) {
  // die('Error: '.$q." ". $mysqli->error);
  // }
  $count = $result->num_rows;
  if($count==1){
  // echo "Login Sucessfully";
session_start();
$_SESSION['username'] = $username;
header("Location: \interface\index.html");

}
else {
echo "Wrong Username or Password";
}

?>
