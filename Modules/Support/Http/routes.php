<?php

Route::group([
    'middleware' => 'web',
    'prefix'     => 'support',
    'namespace'  => 'Modules\Support\Http\Controllers',
], function () {
    Route::get('/', function () {
        return redirect('/support/my_tickets');
    });

    Route::post('comment', 'CommentsController@postComment');

    Route::get('my_tickets', 'TicketsController@userTickets');

    Route::get('new_ticket', 'TicketsController@create');
    Route::post('new_ticket', 'TicketsController@store');

    Route::get('tickets/{ticket_id}', 'TicketsController@show');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('tickets', 'TicketsController@index');
        Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
    });
});
