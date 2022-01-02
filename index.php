<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>To Do App</title>
		<style type="text/css">
			table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
				text-align: center;
			}
			button {
				width: 100%;
			}
		</style>
</head>
<body>
	<center>
			<form name="additemform" method="POST" action="additem.php">
				<table>
					<tr>
						<td>
							<input type="text" name="title" placeholder="Title">
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="content" placeholder="Content">
						</td>
					</tr>
					<tr>
						<td>
							<center>
								<button value="additembutton" type="submit">Add</button>
							</center>
						</td>
					</tr>
				</table>
			</form>
			<table>
				<tr><th>Edit</th><th>Title</th><th>Content</th><th>Delete</th></tr>
				<?php require('fetchtable.php'); ?>
			</table>
		</center>
</body>