<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_name')->nullable();
            $table->integer('cart_total');
            $table->integer('discount_total')->default(0);
            $table->integer('sub_total');
            $table->integer('shipping');
            $table->integer('grand_total');
            $table->integer('payment_option');
            $table->integer('payment_status')->default(0);
            $table->integer('delivary_status')->default(0);
            $table->integer('user_id');
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
        Schema::dropIfExists('order_summaries');
    }
}
