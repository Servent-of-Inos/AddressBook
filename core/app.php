<?php

class App {

	protected static $vault =[];

	public static function Bind ($key, $value) {

		static::$vault[$key] = $value;


	}

	public static function Get ($key) {

		if (!array_key_exists($key, static::$vault)) {

			throw new Exception ("Oops no {$key} is bound in the vault!");
		}

		return static::$vault[$key];
	}
}