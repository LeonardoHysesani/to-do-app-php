<?php
	require('dbconn.php');

	$ID = ($_POST['ID']);
	
	$sql = "DELETE FROM `items` WHERE ID=$ID";

	if ($conn->query($sql) === TRUE) {
	  echo "Record with ID = ".$ID." deleted successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

	header("Location: index.php");
	exit();
?>