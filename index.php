<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';
require 'core/helpers.php';

Router::load('routes.php')->direct(Request::uri(), Request::method());
