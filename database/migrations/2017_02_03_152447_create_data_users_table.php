<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->char('document_type', 1);
            $table->string('id_number', 8)->unique();
            $table->string('name');
            $table->date('birthdate');
            $table->string('phone_number', 20);
            $table->text('direction');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_users');
    }
}
