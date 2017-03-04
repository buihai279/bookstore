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
        Schema::create('bh279_books', function (Blueprint $table) {
             $table->increments('book_id');
            $table->string('book');
            $table->text('description');
            $table->date('publish_date');
            $table->integer('author_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('publishing_house');
            $table->string('translator')->nullable();
            $table->integer('number_of_pages')->unsigned();
            $table->integer('quality')->unsigned();
            $table->bigInteger('price')->nullable()->unsigned();
            $table->bigInteger('cover_price')->unsigned();
            $table->string('book_image')->nullable();
            $table->text('images')->nullable();
            $table->timestamps();

            $table->foreign('author_id')->references('author_id')->on('bh279_authors')->onDelete('cascade');
            $table->foreign('company_id')->references('company_id')->on('bh279_companies')->onDelete('cascade');
            $table->foreign('category_id')->references('category_id')->on('bh279_categories')->onDelete('cascade');
            $table->index('book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh279_books');
    }
}
