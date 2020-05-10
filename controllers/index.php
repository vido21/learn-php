<?php
$tasks = $app['database']->selectAll('todos'); // Model

require 'views/index.view.php'; // View
