<?php

$app['database']->Q_CREATE_TABLE();

$AdressLine = $app['database']->Q_SELECT();

require 'views/index.view.php';