<?php

$app = [];

//  DATABASE CONFIG FILE
$app['config'] = require 'config.php';

//  Classes
require 'core/Request.php';
require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/classes/Task.php';
require 'core/functions/Functions.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);