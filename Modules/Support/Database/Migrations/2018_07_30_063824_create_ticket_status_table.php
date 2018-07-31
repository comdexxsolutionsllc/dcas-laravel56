<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketStatusTable extends Migration
{

    public function up()
    {
        Schema::create('ticket_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status_name', 40);
            $table->string('status_color', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ticket_status');
    }
}
