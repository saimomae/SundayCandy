<?php
$first_name = $_POST['frist_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$username = $_POST['username'];
$passwd = $_POST['passwd'];
require_once('connect.php');
$q="INSERT INTO user (frist_name,last_name,phone_number,email,username,passwd,disable)
VALUES ('".$first_name."','".$last_name."','".$email."','".$phone_number."','".$username."','".$passwd."',0)";
$result = $mysqli->query($q);
if (!$result) {
die('Error: '.$q." ". $mysqli->error);
}
header("Location: login.html");
?>