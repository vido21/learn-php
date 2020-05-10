<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
// $router->get('about/culture', 'about-culture.php');
$router->get('contact', 'PagesController@contact');
// $router->post('names', 'add-name.php');

$router->get('users','UsersController@index');
$router->post('users','UsersController@store');