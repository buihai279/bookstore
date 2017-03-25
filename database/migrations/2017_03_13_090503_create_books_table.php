<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name');
            $table->text('description')->nullable();
            $table->date('publish_date')->nullable();
            $table->integer('suggest')->nullable();
            $table->integer('author_id')->nullable()->unsigned();
            $table->integer('company_id')->nullable()->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            $table->string('publishing_house')->nullable();
            $table->string('translator')->nullable();
            $table->integer('number_of_pages')->nullable();
            $table->integer('quality')->nullable()->default(0);
            $table->bigInteger('price')->nullable();
            $table->bigInteger('cover_price')->nullable();
            $table->string('book_image')->nullable();
            $table->text('images')->nullable();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('books');
        // $table->dropForeign('books_book_id_foreign');
    }
}
