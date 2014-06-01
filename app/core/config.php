<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//set timezone
date_default_timezone_set('Europe/London');

//site address
define('DIR','http://thslmit.com/portal/');

//database details ONLY NEEDED IF USING A DATABASE
define('DB_TYPE','mysql');
define('DB_HOST','watzdb.thslmit.com');
define('DB_NAME','watz');
define('DB_USER','watz');
define('DB_PASS','fuck@lzheimer5');
define('PREFIX','watz_');

//set prefix for sessions
define('SESSION_PREFIX','watz_');

//optionall create a constant for the name of the site
define('SITETITLE','WATZ Web Portal');

//set the default template
Session::set('template','default');
