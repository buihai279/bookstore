<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->integer('quality_code')->unsigned();
            $table->integer('percent')->nullable();
            $table->integer('number')->nullable();
            $table->string('condition')->nullable();
            $table->string('max')->nullable();
            $table->string('content');
            $table->timestamp('started')->nullable();
            $table->timestamp('stopped')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
