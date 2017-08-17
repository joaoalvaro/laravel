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
    return view('site.welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function(){
   //User Controller
   Route::get('/users', 'Admin\UserController@index');
    
    Route::post('assign-roles', [
        'uses' => 'Admin\UserController@atribuirFuncoes',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);
    
});

Route::resource('/new', 'Site\VacancyController');
Route::resource('/users', 'Admin\UserController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vacancy/{id}/update', 'HomeController@update');



Route::get('/roles-permission', 'HomeController@rolesPermission');


