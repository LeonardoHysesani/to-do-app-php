<?php
	require('dbconn.php');

	$sql = "SELECT * FROM `items`";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	  	$ID = $row['ID'];
	  	$TITLE = $row['TITLE'];
	  	$CONTENT = $row['CONTENT'];

	    echo "<tr>";
	    echo "<td>
	    		<form action='edititem.php' method='POST'>
	    			<button value='".$ID."' name='ID' type='submit'>&#x270D;</button>
	    			<input type='hidden' name='TITLE' value='".$TITLE."'>
	    			<input type='hidden' name='CONTENT' value='".$CONTENT."'>
	    		</form>
	    	</td>";
	    echo "<td>".$TITLE."</td>";
	    echo "<td>".$CONTENT."</td>";
	    echo "<td><form action='delitem.php' method='POST'><button name='ID' value='".$ID."' type='submit'>X</button></form></td>";
	    echo "</tr>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();
?>