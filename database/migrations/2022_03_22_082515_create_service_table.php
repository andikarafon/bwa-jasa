<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->nullable();
            $table->string('title'); //tidak di set nullable artinya harus diisi
            $table->longText('description')->nullable();
            $table->integer('delivery_time')->nullable();
            $table->integer('revision_limit')->nullable();
            $table->string('price')->nullable(); //harga string jika dipastikan bukan bilangan double
            $table->longText('note');
            $table->softDeletes();
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
        Schema::dropIfExists('service');
    }
}
