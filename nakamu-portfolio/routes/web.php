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

// Route::get('/', function () {
//     return view('layout');
// });


// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', 'ContactController@index')->name('contact.index');
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');



// Route::post('/contact/confirm', 'MailController@index')->name('contact.confirm');
// Route::get('/contact/confirm', function () {
//     return view('contact/confirm');
// });