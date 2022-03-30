<?php

// namespace App\Core;

/**
 * connection to db
 */
class Connection {

	public static function make($config) {
		try {
			// return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
			return new PDO(
				$config['connection'] . ';dbname=' . $config['name'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		} catch (PDOException $e) {
			die("Could not connect: " . $e->getMessage());
		}
	}

}
