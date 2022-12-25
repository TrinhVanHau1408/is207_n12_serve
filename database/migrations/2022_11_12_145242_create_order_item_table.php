<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('id')->on('order')->onDelete('cascade');
            $table->string('phoneName');
            $table->String('imgUrl');
            $table->unsignedBigInteger('phoneDetailId');
            $table->foreign('phoneDetailId')->references('id')->on('phone_detail')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('priceSale',15,2);
            $table->decimal('totalMoney',15,2);
            $table->softDeletes();
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
        Schema::dropIfExists('order_item');
    }
}
