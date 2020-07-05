<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PageController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Blog Routes
Route::get('/blog/add','BlogController@create')->name('create-blog')->middleware('auth');
Route::post('/blog/add','BlogController@store')->name('store-blog')->middleware('auth');
Route::get('/blog/{id}','BlogController@show')->name('show-blog');
Route::get('/blog/category/{name}','BlogController@showByCategory')->name('show-cat-blog');
Route::post('/blog/search','BlogController@searchBlog')->name('search-blog');

// Route::get('/blog/detail/{id}','TestController@detail')->name('BlogDetailTest');
// Route::get('/search/{keyword?}','TestController@search')->name('BlogSearchTest');
// Route::get('/blog/filter/{category?}','TestController@category')->name('BlogCategoryTest');
// Route::get('/blog/add','TestController@add')->name('BlogAddTest');