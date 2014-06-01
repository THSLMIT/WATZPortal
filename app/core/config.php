<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','http://thslmit.com/portal/');

//database details ONLY NEEDED IF USING A DATABASE
define('DB_TYPE','mysql');
define('DB_HOST','sql5.freesqldatabase.com:3306');
define('DB_NAME','sql542189');
define('DB_USER','sql542189');
define('DB_PASS','kP9!vY4*');
define('PREFIX','watz_');

//set prefix for sessions
define('SESSION_PREFIX','watz_');

//optionall create a constant for the name of the site
define('SITETITLE','WATZ Web Portal');

//set the default template
Session::set('template','default');
