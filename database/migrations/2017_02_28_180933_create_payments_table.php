<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh279_payments', function (Blueprint $table) {
            $table->increments('payment_id');
            $table->string('payment_status');
            $table->string('payment_type');
            $table->bigInteger('amount');
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh279_payments');
    }
}
