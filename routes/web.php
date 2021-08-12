<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('request', 'RequestController@index');
use App\Http\Middleware\HelloMiddleware;
//Route::resource('/request', 'RequestController');
//Route::get('hello', 'HelloController@index');
Route::get('board','BoardController@index');
Route::get('board/add','BoardController@add');
Route::post('board/add','BoardController@create');
Route::get('board/del','BoardController@delete');
Route::post('board/del','BoardController@remove');

Route::get('person','PersonController@index');
Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');
Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');
Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');
Route::get('person/edit','PersonController@edit');
Route::post('person/edit','PersonController@update');
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');
Route::get('hello/show','HelloController@show');
//Route::post('hello', 'HelloController@post');
/*Route::get('hello', function() {
  return view('hello.index');
});*/
//Route::get('hello/{id?}/{pass?}', 'HelloController@index');
//Route::get('hello/other/{id?}/{pass?}', 'HelloController@other');
Route::get('/request', 'RequestController@index');
//Route::post('/request/{name1}', 'RequestController@'.&name1);
Route::get('serch', 'SerchController@index');
Route::get('test', 'TestController@index');
Route::get('/', function () {
    return view('welcome');
});
