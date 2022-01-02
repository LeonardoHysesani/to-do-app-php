<?php
	require('dbconn.php');

	$title = ($_POST['title']);
	$content = ($_POST['content']);

	$sql = "INSERT INTO `items` (ID, TITLE, CONTENT) VALUES (NULL, '$title', '$content')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();

	header("Location: index.php");
	exit();
?>