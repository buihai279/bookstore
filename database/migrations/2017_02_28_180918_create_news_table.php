<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh279_news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('title');
            $table->text('description');
            $table->text('content');
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
        Schema::dropIfExists('bh279_news');
    }
}
