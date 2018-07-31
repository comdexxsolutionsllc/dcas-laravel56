<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoftwareCategoryTable extends Migration
{

    public function up()
    {
        Schema::create('software_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name', 80);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('software_category');
    }
}
