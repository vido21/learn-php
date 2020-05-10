<?php

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');
// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);

Router::load('app/routes.php')->direct(Request::uri(), Request::method());
