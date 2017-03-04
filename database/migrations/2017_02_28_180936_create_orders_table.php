<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh279_orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id')->unsigned();
            $table->integer('sale_id')->unsigned()->nullable();
            $table->string('order_status');
            $table->string('shipping_address');
            $table->integer('shipping_fee');
            $table->integer('cod');
            $table->boolean('book_care');
            $table->integer('payment_id')->unsigned()->unique();
            $table->timestamp('created_at')->nullable();
            // $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('bh279_users')->onDelete('cascade');
            $table->foreign('sale_id')->references('sale_id')->on('bh279_sales')->onDelete('cascade');
            $table->foreign('payment_id')->references('payment_id')->on('bh279_payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh279_orders');
    }
}
