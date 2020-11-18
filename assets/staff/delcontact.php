<?php
	$user_id = $_GET['id'];
	require_once('connect.php');
	if(isset($user_id)) {
		$q="DELETE FROM user WHERE user_id=$user_id";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: contact.php");
	}

?>
