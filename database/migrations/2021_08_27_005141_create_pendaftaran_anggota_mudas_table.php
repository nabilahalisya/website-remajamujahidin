<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranAnggotaMudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_anggota_mudas', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->unsigned();
            // $table->foreignId('id_periode_pendaftaran')->unsigned();
            $table->string('email');
            $table->string('nama_lengkap');
            $table->string('pendidikan_terakhir');
            $table->bigInteger('no_hp');
            $table->string('domisili');
            $table->timestamps();
        });

        // Schema::table('pendaftaran_anggota_mudas', function(Blueprint $table){
        //     $table->foreign('id_users')->references('id')->on('users')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('pendaftaran_anggota_mudas', function(Blueprint $table){
        //     $table->foreign('id_periode_pendaftaran')->references('id')->on('periode_pendaftarans')
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
        Schema::dropIfExists('pendaftaran_anggota_mudas');
    }
}
