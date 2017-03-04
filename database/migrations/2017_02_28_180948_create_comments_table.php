<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh279_comments', function (Blueprint $table) {
            $table->increments('comment_id');
            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->longText('content',20000);
            $table->smallInteger('rate')->unsigned();
            $table->timestamp('created_at')->nullable();
            // $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('bh279_users')->onDelete('cascade');
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
        Schema::dropIfExists('bh279_comments');
    }
}
