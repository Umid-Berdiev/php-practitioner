<?php

$tasks = App::get('database')->selectAll('tasks');
// dd($tasks);
require 'views/tasks.view.php';
