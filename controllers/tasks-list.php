<?php

$tasks = $app['database']->selectAll('tasks');
// dd($tasks);
require 'views/tasks.view.php';
