<?php

// use App\Core\Connection;
// use App\Core\QueryBuilder;
use App\Core\App;

// $app = [];
// $app['config'] = require 'config.php';

// require 'models/Router.php';
// require 'models/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
// 	Connection::make($app['config']['database'])
// );

App::set('config', require 'config.php');
App::set(
	'database',
	new QueryBuilder(Connection::make(App::get('config')['database']))
);
