<?php
require_once('connect.php');
//
// $q= 'SELECT price_buy, price_rent FROM movie WHERE m_id ="1";';
// if($result=$mysqli->query($q)){
//   while($row=$result->fetch_array()){
//     echo '<option value="'.$row[0].'">'.$row[1].'</option>';
//   }
// }else{
//   echo 'Query error: '.$mysqli->error;
// }

// movie_view = $_SESSION['movie'];
if(isset($_POST['sub_buy'])) {
  $status = buy;
  $price =  price_buy;
}
elseif (isset($_POST['sub_rent'])) {
  $status = rent;
  $price = price_rent;
}

session_start();
$_SESSION['status'] = $status;
$_SESSION['price'] = $price;


header("Location: Purchase.php");

?>
