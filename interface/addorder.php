<?php
require_once('connect.php');

  if(isset($_POST['checkout_4'])) {
    $date = "SELECT CURDATE();";

    $q="INSERT INTO orderinfo (price,date,user_id,m_id)
    VALUES ('75','$date','1','4')";
    $result = $mysqli->query($q);
    if (!$result) {
    echo "INSERT failed.Error: ".$mysqli->error ;
                return flase;
              }
    }

?>
