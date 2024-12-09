<?php
class MailingList {

	function select($pdo) {
		// Prepare SQL Statement
		$sql_statement = $pdo->prepare("
			SELECT `id`, `person_email`, `person_name` FROM `mailing_list`
		");

		// Execute Statement
		$sql_statement->execute();

		// Fetch Results
		$results = $sql_statement->fetchAll(PDO::FETCH_ASSOC);

		// Return Results (Associative Array)
		return $results;
	}

	function selectOne($pdo, $id) {
		// Prepare SQL Statement
		$sql_statement = $pdo->prepare("
			SELECT `id`, `person_email`, `person_name` FROM `mailing_list` WHERE `id` = :id
		");

		// Bind Values to Placeholders
		$sql_statement->bindValue(':id', $id);

		// Execute Statement
		$sql_statement->execute();

		// Fetch First Result
		$result = $sql_statement->fetch(PDO::FETCH_ASSOC);

		// Return Result (Associative Array)
		return $result;
	}

	function insert($pdo) {
		// Fetch POST Data
		$email = $_POST["email"];
		$name = $_POST["name"];

		// Prepare SQL Statement with Placeholders :email and :name
		$sql_statement = $pdo->prepare("
			INSERT INTO `mailing_list`
				(`person_email`, `person_name`)
			VALUES
				(:email, :name)
			;
		");

		// Bind Values to Placeholders
		$sql_statement->bindValue(':email', $email);
		$sql_statement->bindValue(':name', $name);

		// Execute Statement
		$status = $sql_statement->execute();

		// Return if success or failed, boolean value
		return boolval($status);
	}

	function update($pdo) {
		// Fetch POST Data
		$id = $_POST["id"];
		$email = $_POST["email"];
		$name = $_POST["name"];

		// Prepare SQL Statement with Placeholders :email and :name
		$sql_statement = $pdo->prepare("
			UPDATE `mailing_list` SET
				`person_email` = :email
				, `person_name` = :name
			WHERE `id` = :id
			;
		");

		// Bind Values to Placeholders
		$sql_statement->bindValue(':id', $id);
		$sql_statement->bindValue(':email', $email);
		$sql_statement->bindValue(':name', $name);

		// Execute Statement
		$status = $sql_statement->execute();

		// Return if success or failed, boolean value
		return boolval($status);
	}

	function delete($pdo) {
		// Fetch POST Data
		$id = $_GET["id"];

		// Prepare SQL Statement with Placeholders :email and :name
		$sql_statement = $pdo->prepare("
			DELETE FROM `mailing_list` WHERE `id` = :id;
		");

		// Bind Values to Placeholders
		$sql_statement->bindValue(':id', $id);

		// Execute Statement
		$status = $sql_statement->execute();

		// Return if success or failed, boolean value
		return boolval($status);
	}

}
?>