<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periode_pendaftarans', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->unsigned();
            $table->string('angkatan');
            $table->date('tanggal_mulai');
            $table->date('taggal_selesai');
            $table->timestamps();
        });

        // Schema::table('periode_pendaftarans', function(Blueprint $table){
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
        Schema::dropIfExists('periode_pendaftarans');
    }
}
