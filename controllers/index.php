<?php

$pdo = DB_connect::connect($config['database']);

$query = new query_builder($pdo);

$query->Q_CREATE_TABLE();

$AdressLine = $query->Q_SELECT();

require 'views/index.view.php';