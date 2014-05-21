<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// TODO: Organize and migrate all resources

Route::get('/', function()
{
	return View::make('index');
});

Route::get('setup', function()
{
	return View::make('setup');
});

Route::get('login', function()
{
	return View::make('login');
});

/* Testing of Database Transactions */
Route::get('test', array(
	'as' => 'test',
	'uses' => 'HomeController@test'
));