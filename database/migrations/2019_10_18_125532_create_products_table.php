<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->comment('Who added this product');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('name');
            $table->float('buying_price');
            $table->float('selling_price');
            $table->float('commission')->comment('commission in selling price');
            $table->tinyInteger('status')->comment('1: New 2: Reconditioned');
            $table->tinyInteger('color_id')->comment('The id of the color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
