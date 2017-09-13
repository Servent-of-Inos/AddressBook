<?php

use Core\{Router, Request};

require 'vendor/autoload.php';
require 'core/bootstrap.php';

require router::load('routes.php')

	-> direct(Request::uri(), Request::method());