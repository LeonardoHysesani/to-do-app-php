<?php
	require('dbconn.php');

	$ID = ($_POST['ID']);
	$TITLE = $_POST['TITLE'];
	$CONTENT = $_POST['CONTENT'];
	
	$sql = "UPDATE `items` SET `TITLE`='".$TITLE."',`CONTENT`='".$CONTENT."' WHERE `ID`='".$ID."'";

	if ($conn->query($sql) === TRUE) {
	  echo "Record with ID = ".$ID." updated successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

	header("Location: index.php");
	exit();
?>