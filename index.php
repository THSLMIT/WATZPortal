<?php
require('app/core/autoloader.php');

/* Routes */

// Portal Routes
Router::get('', 'portal@index');
Router::get('track', 'portal@index');
Router::get('saset', 'portal@index');
Router::get('devset', 'portal@index');
Router::get('anset', 'portal@index');

// Account Routes
Router::get('login', 'account@login');
Router::post('login', 'account@login');

Router::get('setup', 'account@setup');

Router::get('createAcct', 'account@createForm');
Router::post('createAcct', 'account@createForm');

Router:: get('acctSucc', 'account@createAcctSuccess');

// Test Functions
Router::get('test'. function() {
});

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();
