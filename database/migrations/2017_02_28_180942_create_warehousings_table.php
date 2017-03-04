<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh279_warehousings', function (Blueprint $table) {
            $table->increments('warehousing_id');
            $table->integer('book_id')->unsigned();
            $table->integer('quality')->unsigned();
            $table->timestamps();
            $table->foreign('book_id')->references('book_id')->on('bh279_books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh279_warehousings');
    }
}
