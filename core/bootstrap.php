<?php 

use Core\App;
use Core\Database\QueryBuilder;
use Core\Database\Connection;

App::Bind('config', require 'config.php');

App::Bind ('database', new QueryBuilder(

		Connection::make(App::Get('config')['database'])

	));
