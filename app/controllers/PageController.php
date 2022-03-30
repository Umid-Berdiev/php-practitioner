<?php

namespace App\Controllers;

class PageController {
	public function home() {
		// $name = htmlspecialchars($_GET['name']);
		// $greeting = "Hello, $name";

		// $names = [
		//  'Jay',
		//  'Mary',
		//  'Rayn'
		// ];

		// $person = [
		//  'age' => 31,
		//  'hair' => 'brown',
		//  'career' => 'web developer'
		// ];

		// $task = [
		//  'title' => 'Finish homework',
		//  'due' => 'today',
		//  'assigned_to' => 'Jeffrey',
		//  'completed' => false,
		// ];

		// dd($task);

		// $task = new Task("Finish courses");
		// $task->complete();
		// dd($task);

		// $tasks = [
		//  new Task('got to store'),
		//  new Task('finish screencasts'),
		//  new Task('clean my room'),
		// ];

		// $tasks[0]->complete();

		// dd($results[0]->description);

		return views('index');
	}

	public function about() {
		$company_name = 'Laracasts';
		return views('about', compact('company_name'));
	}

	public function aboutCulture() {
		$company_name = 'Laracasts';
		return views('about-culture', compact('company_name'));
	}

	public function contact() {
		$company_name = 'Laracasts';
		return views('contact', compact('company_name'));
	}
}
