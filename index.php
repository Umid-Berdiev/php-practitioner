<?php

use App\Models\Request;
use App\Models\Router;

require 'vendor/autoload.php';
require 'core/bootstrap.php';
require 'core/helpers.php';

Router::load('app/routes.php')->direct(Request::uri(), Request::method());
