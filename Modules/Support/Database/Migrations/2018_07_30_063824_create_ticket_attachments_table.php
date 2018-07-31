<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketAttachmentsTable extends Migration
{

    public function up()
    {
        Schema::create('ticket_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id');
            $table->string('file_name', 70);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ticket_attachments');
    }
}