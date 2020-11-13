<?php
//INSERT FUCTION
require_once('connect.php');
session_start();
$price = $_SESSION['price'];

if(isset($_POST['checkout'])) {



  $U = 'SELECT user_id FROM user WHERE username = "'.$_SESSION['username'].'";';
  $uid = $mysqli->query($U);

   while($row=$uid->fetch_array()){
    $user_id = $row['user_id'];

    }

  $q="INSERT INTO orderinfo (price,date,user_id,m_id)
  VALUES ('$price',CURDATE(),'$user_id','4')";
  $result = $mysqli->query($q);
  if (!$result) {
  echo "INSERT failed.Error: ".$mysqli->error ;
              return flase;
            }
  header("Location: index.php");
  }
?>
