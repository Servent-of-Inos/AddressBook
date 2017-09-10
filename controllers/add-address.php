<?php

$app['database']->Q_INSERT(

	$_POST['Author'], $_POST['Title'], $_POST['Description']

	);

header('Location: /');