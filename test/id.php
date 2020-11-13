<?php
  require_once('connect.php');
  session_start();
  $da = 'SELECT CURDATE();';
    $row= $mysqli->query($da)

    echo $row;

 ?>
