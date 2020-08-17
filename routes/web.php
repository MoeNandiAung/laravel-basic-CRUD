<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/article',function(){
	return view('article', ['articles' => App\Article::all()]);
});

Route::get('/article/create', 'ArticleController@create');
Route::post('/article', 'ArticleController@store');
Route::get('/article/{ArticleId}','ArticleController@show');
Route::get('/article/{ArticleId}/edit', 'ArticleController@edit');
Route::put('/article/{ArticleId}/update','ArticleController@update');
Route::get('/article/{ArticleId}/delete','ArticleController@delete');
Route::get('/article/{ArticleId}/comment','CommentController@create');
Route::post('/article/{ArticleId}','CommentController@show');





Route::get('/profile', 'ProfileController@show');
Route::put('/home/{home}', 'UpdateController@update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
