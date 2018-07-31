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

Route::resource('notify', 'NotificationController')->only(['index', 'show', 'update',]);
Route::post('notify/{notify}/read', 'NotificationController@markAsRead')->name('notify.read');

Auth::routes();

Route::group([
    'prefix' => 'profiles',
], function () {
    Route::get('/show/{profile}', 'ProfilesController@show')->name('profiles.profile.show')->where('id', '[0-9]+');

    Route::get('/{profile}/edit', 'ProfilesController@edit')->name('profiles.profile.edit')->where('id', '[0-9]+');

    Route::put('profile/{profile}', 'ProfilesController@update')->name('profiles.profile.update')->where('id', '[0-9]+');
});

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix' => '/dashboard/admin'], function () {
    Route::group([
        'prefix' => 'permissions',
    ], function () {
        Route::get('/', 'PermissionsController@index')->name('permissions.permission.index');

        Route::get('/create', 'PermissionsController@create')->name('permissions.permission.create');

        Route::get('/show/{permission}', 'PermissionsController@show')->name('permissions.permission.show')->where('id', '[0-9]+');

        Route::get('/{permission}/edit', 'PermissionsController@edit')->name('permissions.permission.edit')->where('id', '[0-9]+');

        Route::post('/', 'PermissionsController@store')->name('permissions.permission.store');

        Route::put('permission/{permission}', 'PermissionsController@update')->name('permissions.permission.update')->where('id', '[0-9]+');

        Route::delete('/permission/{permission}', 'PermissionsController@destroy')->name('permissions.permission.destroy')->where('id', '[0-9]+');
    });

    Route::group([
        'prefix' => 'roles',
    ], function () {
        Route::get('/', 'RolesController@index')->name('roles.role.index');

        Route::get('/create', 'RolesController@create')->name('roles.role.create');

        Route::get('/show/{role}', 'RolesController@show')->name('roles.role.show')->where('id', '[0-9]+');

        Route::get('/{role}/edit', 'RolesController@edit')->name('roles.role.edit')->where('id', '[0-9]+');

        Route::post('/', 'RolesController@store')->name('roles.role.store');

        Route::put('role/{role}', 'RolesController@update')->name('roles.role.update')->where('id', '[0-9]+');

        Route::delete('/role/{role}', 'RolesController@destroy')->name('roles.role.destroy')->where('id', '[0-9]+');
    });

    Route::group([
        'prefix' => 'users',
    ], function () {
        Route::get('/', 'UsersController@index')->name('users.user.index');

        Route::get('/create', 'UsersController@create')->name('users.user.create');

        Route::get('/show/{user}', 'UsersController@show')->name('users.user.show')->where('id', '[0-9]+');

        Route::get('/{user}/edit', 'UsersController@edit')->name('users.user.edit')->where('id', '[0-9]+');

        Route::post('/', 'UsersController@store')->name('users.user.store');

        Route::put('user/{user}', 'UsersController@update')->name('users.user.update')->where('id', '[0-9]+');

        Route::delete('/user/{user}', 'UsersController@destroy')->name('users.user.destroy')->where('id', '[0-9]+');
    });
});

Route::group([
    'prefix' => 'subscriptions',
], function () {
    Route::get('/', 'SubscriptionsController@index')->name('subscriptions.subscription.index');

    Route::get('/create', 'SubscriptionsController@create')->name('subscriptions.subscription.create');

    Route::get('/show/{subscription}', 'SubscriptionsController@show')->name('subscriptions.subscription.show')->where('id', '[0-9]+');

    Route::get('/{subscription}/edit', 'SubscriptionsController@edit')->name('subscriptions.subscription.edit')->where('id', '[0-9]+');

    Route::post('/', 'SubscriptionsController@store')->name('subscriptions.subscription.store');

    Route::put('subscription/{subscription}', 'SubscriptionsController@update')->name('subscriptions.subscription.update')->where('id', '[0-9]+');

    Route::delete('/subscription/{subscription}', 'SubscriptionsController@destroy')->name('subscriptions.subscription.destroy')->where('id', '[0-9]+');
});
