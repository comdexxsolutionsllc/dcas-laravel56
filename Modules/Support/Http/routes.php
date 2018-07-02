<?php

Route::group([
    'middleware' => 'web',
    'prefix'     => 'support',
    'namespace'  => 'Modules\Support\Http\Controllers',
], function () {
    Route::get('/', 'SupportController@index');
});
