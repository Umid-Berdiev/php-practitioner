<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';
require 'core/functions.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());
