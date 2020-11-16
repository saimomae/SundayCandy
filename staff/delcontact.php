<?php
	$userid = $_GET['userid'];
	require_once('connect.php');
	if(isset($userid)) {
		$q="DELETE FROM user WHERE u_id=$userid";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: contact.php");
	}
	
?>
