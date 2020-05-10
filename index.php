<?php

require 'vendor/autoload.php';
$database = require 'core/boostrap.php';

// $uri = trim($_SERVER['REQUEST_URI'], '/');
// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);

Router::load('routes.php')->direct(Request::uri(), Request::method());
