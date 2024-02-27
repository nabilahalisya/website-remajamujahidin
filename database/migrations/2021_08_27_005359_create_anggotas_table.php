<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->unsigned();
            // $table->foreignId('id_anggota_muda')->unsigned();
            // $table->foreignId('id_anggota_biasa')->unsigned();
            $table->string('asal_daerah');
            $table->string('angkatan');
            $table->enum('status', ['Anggota Muda', 'Anggota Biasa']);
            $table->timestamps();
        });

        // Schema::table('anggotas', function(Blueprint $table){
        //     $table->foreign('id_users')->references('id')->on('users')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('anggotas', function(Blueprint $table){
        //     $table->foreign('id_anggota_muda')->references('id')->on('pendaftaran_anggota_mudas')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });

        // Schema::table('anggotas', function(Blueprint $table){
        //     $table->foreign('id_anggota_biasa')->references('id')->on('pendaftaran_anggota_biasas')
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
        Schema::dropIfExists('anggotas');
    }
}
