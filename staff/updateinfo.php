<?php
$m_id = $_POST['m_id'];
$title = $_POST['title'];
$time = $_POST['time'];
$rent = $_POST['price_rent'];
$buy = $_POST['price_buy'];
$g_id = $_POST['g_id'];

require_once('connect.php');

if ($mysqli->connect_errno) {
    echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
}
$q = "UPDATE movie SET title='$title',time='$time',price_rent='$rent' ,price_buy = '$buy' ,g_id = '$g_id' WHERE m_id=$m_id";
if (!$mysqli->query($q)) {
    echo "UPDATE failed. Error: " . $mysqli->error;
}
$mysqli->close();
//redirect
header("Location: editmovie.php");
?>