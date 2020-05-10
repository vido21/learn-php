<?php

use App\Core\App;

// $app = [];
// $app['config'] = require './config.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = null)
{
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
