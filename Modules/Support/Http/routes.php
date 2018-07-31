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

    Route::resource('location', 'LocationController');
    Route::resource('location/group', 'LocationGroupController');

    Route::resource('machine', 'MachineController');
    Route::resource('machine/log', 'MachineLogController');
    Route::resource('machine/note', 'MachineNotesController');
    Route::resource('machine/note/attachment', 'MachineNoteAttachmentsController');
    Route::resource('machine/type', 'MachineTypeController');

    Route::get('my_tickets', 'TicketsController@userTickets');

    Route::get('new_ticket', 'TicketsController@create');
    Route::post('new_ticket', 'TicketsController@store');

    Route::resource('software', 'SoftwareController');
    Route::resource('software/category', 'SoftwareCategoryController');
    Route::resource('software/installed', 'SoftwareInstalledController');

    Route::get('ticket/{ticket_id}', 'TicketsController@show');
    Route::resource('ticket/attachment', 'TicketAttachmentsController');
    Route::resource('ticket/comment', 'TicketCommentsController');
    Route::resource('ticket/comment/attachment', 'TicketCommentAttachmentsController');
    Route::resource('ticket/log', 'TicketLogController');
    Route::resource('ticket/status', 'TicketStatusController');
    Route::resource('ticket/worker', 'TicketWorkersController');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('tickets', 'TicketsController@index');
        Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
    });
});
