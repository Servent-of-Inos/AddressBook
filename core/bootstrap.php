<?php

$app = []; 

require 'core/AdressBook.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
require 'core/functions.php';
require 'core/router.php';
require 'core/Request.php';

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(

	Connection::make($app['config']['database'])

	);
