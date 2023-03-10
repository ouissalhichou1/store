<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_color_size', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_size_id')->unsigned();
            $table->foreign('product_size_id')->references('id')->on('products_size');
            $table->integer('product_color_id')->unsigned();
            $table->foreign('product_color_id')->references('id')->on('products_color');
            $table->integer('quantity');
            $table->decimal('price two',10,2)->nullable();
            $table->decimal('discount',10,2)->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('products_color_size');
    }
};
