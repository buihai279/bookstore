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
        Schema::create('bh279_sales', function (Blueprint $table) {
            $table->increments('sale_id');
            $table->text('sale');
            $table->integer('quality')->unsigned();
            $table->text('condition');
            $table->string('content');

            $table->timestamp('started')->nullable();
            $table->timestamp('stopped')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh279_sales');
    }
}
