<?php

class DB_connect {



public static function connect ($config) {

	try {
    		
			return new PDO(

				'mysql:dbname=' . $config['name'] . ';host=' . $config['host'],

				$config['user'],

				$config['password'],

				$config['options']

				);
    		
		} 	catch (PDOException $e) {

    			echo 'Error ' . $e->getMessage();
			}

}

}