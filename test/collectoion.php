<?php
  require_once('connect.php');
  session_start();
  $_SESSION['username'] = "admin";

  $uid = 'SELECT user_id FROM user WHERE username = "'.$_SESSION['username'].'";';
  $user_id = $mysqli->query($uid);
  $u_id = 0;

   while($row=$user_id->fetch_array()){
    $U = $row['user_id'];
    echo  $U;
    }

  $l_o = 'SELECT m_id FROM orderinfo WHERE user_id = "'.$U.'";';
  $list_order = $mysqli->query($l_o);

   while($row=$list_order->fetch_array()){
    $L = $row['m_id'];
    echo  $L;
    }

 ?>
