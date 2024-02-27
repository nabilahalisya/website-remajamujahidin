<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranAnggotaBiasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_anggota_biasas', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->unsigned();
            // $table->foreignId('id_anggota_muda')->unsigned();
            // $table->foreignId('id_periode_pendaftaran')->unsigned();
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('kelas');
            $table->bigInteger('semester');
            $table->bigInteger('no_hp_orang_tua');
            $table->string('nama_kelompok_pembinaan');
            $table->string('nama_penyakit');
            $table->string('alergi');
            $table->timestamps();
        });


        // Schema::table('pendaftaran_anggota_biasas', function(Blueprint $table){
        //     $table->foreign('id_users')->references('id')->on('users')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('pendaftaran_anggota_biasas', function(Blueprint $table){
        //     $table->foreign('id_anggota_muda')->references('id')->on('pendaftaran_anggota_mudas')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('pendaftaran_anggota_biasas', function(Blueprint $table){
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
        Schema::dropIfExists('pendaftaran_anggota_biasas');
    }
}
