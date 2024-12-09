<?php
// Require Database Connection
require_once "../dbconnect.php";

// Include Data Object
require_once "../data_object/MailingList.php";

// Create New Data Object
$do = new MailingList();

// List Entries
$dataList = $do->select($pdo);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mailing List</title>

	<style>
		.container {
			border: 1px solid black;
			padding: 20px;
			margin-bottom: 10px;
		}

		table {
			border-collapse: collapse;
			min-width: 400px;
		}

		table td,
		table th {
			border: 1px solid black;
			padding: 5px 10px;
		}
	</style>
</head>

<body>

	<div class="container" style="max-width: 300px;">
		<h3>Form</h3>
		<form method="post" action="../process/mailing_list.php?action=create">
			<div style="margin-bottom: 10px;">
				Name: <input type="text" name="name" />
			</div>
			<div style="margin-bottom: 10px;">
				Email: <input type="text" name="email" />
			</div>
			<div style="margin-bottom: 10px; text-align: right;">
				<button type="submit">Add Entry</button>
			</div>
		</form>
	</div>

	<div class="container">
		<h3>List</h3>

		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Loop through Data
				foreach ($dataList as $row) {
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['person_name']}</td>";
					echo "<td>{$row['person_email']}</td>";
					echo "<td>";
					echo "<a href=\"mailing_list_update.php?id={$row['id']}\">Update</a>";
					echo " | ";
					echo "<a href=\"mailing_list.php?action=delete&id={$row['id']}\">Delete</a>";
					echo "</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>

</body>

</html>