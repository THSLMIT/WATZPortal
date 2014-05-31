<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','http://thslmit.com/portal/');

//database details ONLY NEEDED IF USING A DATABASE
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','database_name');
define('DB_USER','username');
define('DB_PASS','password');
define('PREFIX','smvc_');

//set prefix for sessions
define('SESSION_PREFIX','smvc_');

//optionall create a constant for the name of the site
define('SITETITLE','WATZ Web Portal');

//set the default template
Session::set('template','default');
