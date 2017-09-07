<?php

$router -> GET('', 'controllers/index.php');
$router -> POST('add-address', 'controllers/add-address.php');
$router -> POST('update-address', 'controllers/update-address.php');
$router -> POST('delete-address', 'controllers/delete-address.php');