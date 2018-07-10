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

Route::get('/', 'FrontendController@index');

Route::get('/about', 'FrontendController@about');
Route::get('/contact', 'FrontendController@contact');
Route::get('/services', 'FrontendController@services');
Route::get('/gallery', 'FrontendController@gallery');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'page-setting'], function(){

    Route::get('/about', 'BackendController@about')->name('page-setting.about');
    Route::post('/about-store', 'BackendController@aboutStore')->name('page-setting.aboutStore');

});

Route::get('/site-config', 'SiteConfigController@index')->name('siteConfig.index');
Route::post('/site-config-store', 'SiteConfigController@store')->name('siteConfig.store');

Route::get('/account-setting', 'AccountController@index')->name('account-setting.index');
Route::post('/account-setting-store', 'AccountController@store')->name('account-setting.store');

Route::get('/inbox', 'BackendController@inbox')->name('inbox');
Route::get('/inbox/read/{id}', 'BackendController@readInbox')->name('inbox.read');
Route::get('/inbox/delete/{id}', 'BackendController@destroy')->name('inbox.delete');
Route::get('/inbox/delete-all', 'BackendController@inboxDeleteAll')->name('inbox.deleteAll');
Route::post('/send', 'InboxController@store')->name('inbox.send');
