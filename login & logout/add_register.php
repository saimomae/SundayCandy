<?php

if(isset($_POST['sub'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$username = $_POST['username'];
$passwd = $_POST['passwd'];
require_once('connect.php');


$q="INSERT INTO user (FName,LName,Phone,Email,username,password)
VALUES ('$first_name','$last_name','$email','$phone_number','$username','$passwd')";
$result = $mysqli->query($q);
if (!$result) {
//die('Error: '.$q." ". $mysqli->error);
echo "INSERT failed.Error: ".$mysqli->error ;
						return flase;
          }
header("Location: login.html");
}
?>
