<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStruktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strukturs', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->unsigned();
            $table->string('gambar');
            $table->string('nama');
            $table->string('jabatan');
            $table->longText('deskripsi');
            $table->timestamps();
        });

        // Schema::table('strukturs', function(Blueprint $table){
        //     $table->foreign('id_users')->references('id')->on('users')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strukturs');
    }
}
