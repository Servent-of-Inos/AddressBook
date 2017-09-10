<?php

class Connection {



public static function make ($config) {

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