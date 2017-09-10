<?php

App::Get('database')->QDelete($_POST['id']);

header('Location: /');