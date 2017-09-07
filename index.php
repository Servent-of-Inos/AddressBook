<?php

require 'core/bootstrap.php';

require router::load('routes.php')

	-> direct(Request::uri(), Request::method());