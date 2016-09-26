<?php


$tasks = $app['database']->selectAll('todos','Task');
$users = $app['database']->selectAll('users','Task');


require 'views/index.view.php';