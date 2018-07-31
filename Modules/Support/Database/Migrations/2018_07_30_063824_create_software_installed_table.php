<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwareInstalledTable extends Migration
{

    public function up()
    {
        Schema::create('software_installed', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('software_id');
            $table->integer('machine_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('software_installed');
    }
}
