<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsIntoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('phone')->nullable();
            $table->string('address')->nullable();
            $table->smallInteger('level')->default(0)->comment('0:customer, 1:mod, 2:admin');
            $table->boolean('block')->default(false)->comment('true:block');
            $table->boolean('deleted')->default(false)->comment('true:delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('users', function (Blueprint $table) {
        //    $table->dropCloumn('phone','address','level');
        // });
    }
}
