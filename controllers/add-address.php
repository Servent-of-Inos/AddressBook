<?php

$pdo = DB_connect::connect($config['database']);

$query = new query_builder($pdo);

$query->Q_INSERT(

	$_POST['Author'], $_POST['Title'], $_POST['Description']

	);

require 'views/add-address.view.php';