<?php

// namespace App\Core;

/**
 *
 */
class QueryBuilder {
	protected $pdo;

	function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll($table) {
		$statement = $this->pdo->prepare("SELECT * FROM $table");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function store($table) {
		// $task_description = $_POST['description'];
		// $statement = $this->pdo->prepare("INSERT INTO $table (description) VALUES('$task_description')");
		// $statement->execute();
		// return $statement->fetchAll(PDO::FETCH_CLASS);

		$params = [
			'description' => $_POST['description'],
		];

		$sql = sprintf(
			'INSERT INTO %s (%s) VALUES (%s)',
			$table,
			implode(', ', array_keys($params)),
			':' . implode(', :', array_keys($params))
		);

		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($params);
		} catch (Exception $e) {
			die('Whhops, something went wrong: ' . $e->getMessage());
		}
	}
}
