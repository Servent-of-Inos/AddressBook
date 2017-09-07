<?php

$pdo = DB_connect::connect($config['database']);

$query = new query_builder($pdo);

$query->Q_UPDATE(

	$_POST['id'], $_POST['Author'], $_POST['Title'], $_POST['Description']

	);

require 'views/update-address.view.php';