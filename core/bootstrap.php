<?php

$app = [];
$app['config'] = require 'config.php';
require 'models/Router.php';
require 'models/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);