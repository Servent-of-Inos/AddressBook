<?php

App::Get('database')->QCreateTable();

$AdressLine = App::Get('database')->QSelect();

require 'views/index.view.php';