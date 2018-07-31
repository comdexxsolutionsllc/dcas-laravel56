<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationGroupsTable extends Migration
{

    public function up()
    {
        Schema::create('location_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name', 255);
            $table->string('group_description', 255)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('location_groups');
    }
}
