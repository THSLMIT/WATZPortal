<?php
require('app/core/autoloader.php');

/* Routes */

// Portal Routes
Router::get('/', 'portal@index');

// Account Routes
Router::get('/login', 'account@login');
Router::get('/setup', 'account@setup');
Router::get('/createAcct', 'account@createForm');

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();