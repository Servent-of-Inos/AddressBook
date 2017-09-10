<?php

$app['database']->QDelete($_POST['id']);

header('Location: /');