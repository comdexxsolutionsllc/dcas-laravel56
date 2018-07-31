<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMachineNoteAttachmentsTable extends Migration
{

    public function up()
    {
        Schema::create('machine_note_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('note_id');
            $table->string('file_name', 70);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('machine_note_attachments');
    }
}
