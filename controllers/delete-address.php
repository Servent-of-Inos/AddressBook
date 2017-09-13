<?php

namespace Controllers;

use Core\App;

App::Get('database')->QDelete($_POST['id']);

header('Location: /');