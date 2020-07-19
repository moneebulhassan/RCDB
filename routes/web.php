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

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
//
// Route::get('/admin/categories', 'CategoriesController@index')->name('list_category');
Route::post('search','Admin\VolunteersController@search')->name('search');
Route::resource('/admin/links','Admin\linksController',['as'=>'admin']);
Route::resource('/admin/branches','Admin\branchesController',['as'=>'admin']);
Route::resource('/admin/volunteers','Admin\VolunteersController',['as'=>'admin']);
