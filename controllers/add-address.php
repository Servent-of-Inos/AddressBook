<?php

namespace Controllers;

use Core\App;

App::Get('database')->QInsert(

	$_POST['Author'], $_POST['Title'], $_POST['Description']

	);

header('Location: /');