<?php

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

$tasks = $app['database']->selectAll('tasks');
require 'views/index.view.php';
