<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySubcategoryPivotTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_subcategory', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->index();
            $table->integer('subcategory_id')->unsigned()->index();

            $table->primary(['category_id', 'subcategory_id']);

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_subcategory');
    }
}
