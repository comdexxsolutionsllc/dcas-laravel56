<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwareTable extends Migration
{

    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->increments('id');
            $table->string('software_name', 80);
            $table->string('software_key', 50);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('software');
    }
}
