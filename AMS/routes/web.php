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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'PagesController@index');
   
Route::get('/about', 'PagesController@about');

Route::resource('posts', 'PostsController');
Route::get('showpost', 'PostsController@show');
Route::resource('events', 'EventController');
Route::get('addeventurlt','EventController@display');
Route::get('displaydata','EventController@show');
Route::get('deleteevent','EventController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=> 'Admin', 'middleware'=>['auth','admin']],function
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'staff.','prefix'=>'staff','namespace'=> 'Staff', 'middleware'=>['auth','staff']],function
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('staffadd', 'StaffController');
    Route::post('staffrc', 'StaffController@store');
    Route::get('news', 'StaffController@create');
    Route::get('showstaff', 'StaffController@show');
    Route::delete('staffdelete','StaffController@destroy');
   
    Route::get('/', 'ChatsController@index');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::get('messages', 'ChatsController@sendMessage');
});

Route::group(['as'=>'client.','prefix'=>'client','namespace'=> 'Client', 'middleware'=>['auth','client']],function
(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('addeventurlt','EventController@display');
    Route::get('displaydata','EventController@show');
    Route::get('deleteevent','EventController@show');

});


