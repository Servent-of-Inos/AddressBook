<?php

$app['database']->QCreateTable();

$AdressLine = $app['database']->QSelect();

require 'views/index.view.php';