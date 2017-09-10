<?php

$app['database']->Q_UPDATE(

	$_POST['id'], $_POST['Author'], $_POST['Title'], $_POST['Description']

	);

header('Location: /');