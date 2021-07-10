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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
Auth::routes(['register' => false]);
Route::get('/adminHome', 'AdminController@home')->name('admin.home');
Route::get('/addIssue', 'AdminController@addIssue')->name('admin.addissue');
Route::get('/issuesList', 'AdminController@issueList')->name('admin.issuelist');
Route::post('/createIssue', 'AdminController@createIssue')->name('admin.createIssue');

Route::get('/', 'PagesController@home')->name('user.home');
Route::get('/{slug}', 'PagesController@getMagazine')->name('user.magazine');
Route::post('/year', 'PagesController@getMagazineByYear')->name('user.year');
Route::post('/magName', 'PagesController@getMagazineByName')->name('user.emag.name');