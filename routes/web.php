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

Route::view('/', 'welcome');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => '/dashboard/admin'], function () {
    Route::resource('/permissions', PermissionController::class)->except([
        'destroy',
        'edit',
        'update',
    ]);

    Route::resource('/roles', RoleController::class)->except([
        'destroy',
        'edit',
        'update',
    ]);
});
