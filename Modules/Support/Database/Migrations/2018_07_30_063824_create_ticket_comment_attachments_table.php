<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketCommentAttachmentsTable extends Migration
{

    public function up()
    {
        Schema::create('ticket_comment_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id');
            $table->string('file_name', 70);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ticket_comment_attachments');
    }
}
