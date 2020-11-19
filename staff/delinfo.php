<?php
	// $g_id = $_GET['id'];
	$id = $_GET['id'];
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

?>
