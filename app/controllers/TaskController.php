<?php

namespace App\Controllers;
use App\Core\App;

class TaskController {
	public function index() {
		$tasks = App::get('database')->selectAll('tasks');
		// dd($tasks);
		return views('tasks', compact('tasks'));
	}

	public function store() {
		$tasks = App::get('database')->store('tasks');

		return redirect('tasks');
	}
}
