<?php

$app['database']->Q_DELETE($_POST['id']);

header('Location: /');