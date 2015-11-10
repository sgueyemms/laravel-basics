<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
*/
Route::bind('tasks', function($value, $route) {
	return App\Task::find($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::find($value)->first();
});
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');