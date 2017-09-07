<?php

$pdo = DB_connect::connect($config['database']);

$query = new query_builder($pdo);

$query->Q_DELETE($_POST['id']);

require 'views/delete-address.view.php';