<?php
$username = $_POST['username'];
$passwd = $_POST['passwd'];
require_once('connect.php');
$q="select * from user where disable = 0
and username='".$username."' and password='".$passwd."'" ;
$result = $mysqli->query($q);
if (!$result) {
die('Error: '.$q." ". $mysqli->error);
}
$count = $result->num_rows;
if($count==1){
echo "Login Sucessfully";
} 
else {
echo "Wrong Username or Password";
}
?>