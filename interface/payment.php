<?php
require_once('connect.php');
session_start();
$m_id = $_SESSION['m_id'];

$q= 'SELECT title FROM movie WHERE m_id = "'.$m_id.'"';
if($result=$mysqli->query($q)){
while($row=$result->fetch_array()){
$title=$row['title'];
}
}
else{
echo 'Query error: '.$mysqli->error;
}

//If press buy
if(isset($_POST['sub_buy'])) {
  $status = Buy;
  $price =  price_buy;
  $q= 'SELECT price_buy FROM movie WHERE m_id ="'.$m_id.'";';
  if($result=$mysqli->query($q)){
    while($row=$result->fetch_array()){
      $price=$row[price_buy];
    }
  }else{
    echo 'Query error: '.$mysqli->error;
  }
header("Location: checkout.php");
}

//If press rent
elseif (isset($_POST['sub_rent'])) {
  $status = Rent;
  $price = price_rent;

  $q= 'SELECT price_rent FROM movie WHERE m_id ="1";';
  if($result=$mysqli->query($q)){
    while($row=$result->fetch_array()){
      $price=$row[price_rent];
    }
  }else{
    echo 'Query error: '.$mysqli->error;
  }
header("Location: checkout.php");
}

$_SESSION['price']   = $price;
$_SESSION['status']   = $status;
$_SESSION['title']   = $title;
$_SESSION['m_id'] = $m_id;


?>
