<?php
$users = App::get('database')->selectAll('users');
require 'views/contact.view.php';
