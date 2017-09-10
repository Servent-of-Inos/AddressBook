<?php 

require 'core/AdressBook.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';
require 'core/functions.php';
require 'core/router.php';
require 'core/Request.php';
require 'core/app.php';

App::Bind('config', require 'config.php');

App::Bind ('database', new QueryBuilder(

		Connection::make(App::Get('config')['database'])

	));
