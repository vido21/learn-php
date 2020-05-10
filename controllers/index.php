<?php
$tasks = App::get('database')->selectAll('todos'); // Model

require 'views/index.view.php'; // View
