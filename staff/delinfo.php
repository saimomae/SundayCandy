<?php
	$id = $_GET['id'];
	// $userid = $_GET['userid'];
	require_once('connect.php');
	if (isset($id)) {
		$q="DELETE FROM movie where m_id=$id";
			if(!$mysqli->query($q)){
				echo "DELETE failed. Error: ".$mysqli->error ;
		   }
		   $mysqli->close();
		   //redirect
		   header("Location: editmovie.php");
	}

	// elseif(isset($userid)) {
	// 	$q="DELETE FROM user WHERE u_id=$userid";
	// 		if(!$mysqli->query($q)){
	// 			echo "DELETE failed. Error: ".$mysqli->error ;
	// 	   }
	// 	   $mysqli->close();
	// 	   //redirect
	// 	   header("Location: contact.php");
	// }
	
?>
