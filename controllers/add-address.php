<?php

$app['database']->QInsert(

	$_POST['Author'], $_POST['Title'], $_POST['Description']

	);

header('Location: /');