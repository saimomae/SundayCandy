<?php
  require_once('connect.php');

  $q = 'SELECT m_id FROM movie;';
  if($result=$mysqli->query($q))
  {
    $row=$result->fetch_array();

  }
  else
  {
    echo 'Query error: '.$mysqli->error;
  }

  echo $row['m_id'];


 ?>
