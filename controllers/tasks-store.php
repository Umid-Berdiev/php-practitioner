<?php

// $task_description = $_POST['description'];
// dd($task_description);
$tasks = $app['database']->store('tasks');

Request::redirect('/tasks');
// require 'views/tasks.view.php';
