<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bh279_password_resets', function (Blueprint $table) {
            $table->string('email',100)->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
            
            $table->foreign('email')->references('email')->on('bh279_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bh279_password_resets');
    }
}
