<?php

namespace App\Models;

class Task {
	public $description;
	public $completed = false;

	// public function __construct($description) {
	// 	$this->description = $description;
	// 	// $this->completed = $completed;
	// }

	public function complete() {
		$this->completed = true;
	}

	public function isCompleted() {
		return $this->completed;
	}

}
