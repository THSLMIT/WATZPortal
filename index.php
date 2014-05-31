<?php
require('app/core/autoloader.php');

/* Routes */
Router::get('/', 'welcome@index');

Router::get('/login', 'account@login');

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();