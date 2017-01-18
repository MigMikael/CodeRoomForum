<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/forum', 'ForumController');
Route::resource('/discussion', 'DiscussionController');
Route::resource('/topic', 'TopicController');
Route::resource('/reply', 'ReplyController');

Route::get('/topic/create/{discussion_id}', 'TopicController@create2');