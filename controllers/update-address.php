<?php

App::Get('database')->QUpdate(

	$_POST['id'], $_POST['Author'], $_POST['Title'], $_POST['Description']

	);

header('Location: /');