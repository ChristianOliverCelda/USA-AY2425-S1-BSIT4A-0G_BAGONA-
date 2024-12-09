<?php
// Check if no GET variable "action"
if (empty($_GET["action"])) {
	// Print Error
	echo "Invalid Action!";

	// Terminate Script
	die;
}

// Import Database Connection, $pdo variable will be from this file
require_once "../dbconnect.php";

// Import Data Object
require_once "../data_object/MailingList.php";

// Create New Data Object
$do = new MailingList();

// Set a boolean flag if the process is successful or not
$processStatus = false;

// Call the function based on "action" value
switch ($_GET['action']) {
	case 'create':
		$processStatus = $do->insert($pdo);
		break;
	case 'update':
		$processStatus = $do->update($pdo);
		break;
	case 'delete':
		$processStatus = $do->delete($pdo);
		break;
	default:
		// If none of the above, print error and terminate script
		echo "Invalid Action!";
		die;
}

// Successful Process
if($processStatus) {
	echo "Process Successful!";
} else {
	echo "Process Failed!";
}

// Back Button
echo '<br/>';
echo '<a href="../page/mailing_list.php">Back to List</a>';
?>