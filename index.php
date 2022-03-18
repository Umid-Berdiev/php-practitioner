<?php

require 'core/bootstrap.php';
require 'core/functions.php';

// dd($app);
require Router::load('routes.php')->direct(Request::uri());
