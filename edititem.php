<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
			<form name="additemform" method="POST" action="applychanges.php">
				<?php
					$ID = $_POST['ID'];
					echo "<input type='hidden' name='ID' value='".$ID."'>";

				?>
				<table>
					<tr>
						<td>
							<?php
								$TITLE = $_POST['TITLE'];
								echo "<input type='text' name='TITLE' value='".$TITLE."'>";

							?>
						</td>
					</tr>
					<tr>
						<td>
							<?php
								$CONTENT = $_POST['CONTENT'];
								echo "<input type='text' name='CONTENT' value='".$CONTENT."'>";

							?>
						</td>
					</tr>
					<tr>
						<td>
							<center>
								<form action="index.php">
									<button type="submit">Cancel</button>
								</form>
								<button value="additembutton" type="submit">Apply changes</button>
							</center>
						</td>
					</tr>
				</table>
			</form>
		</center>
</body>
</html>