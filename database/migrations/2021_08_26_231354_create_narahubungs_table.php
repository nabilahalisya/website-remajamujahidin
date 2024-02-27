<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNarahubungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narahubungs', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_users')->unsigned();
            $table->string('email');
            $table->bigInteger('no_hp');
            $table->string('alamat');
            $table->timestamps();
        });

        // Schema::table('narahubungs', function(Blueprint $table){
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
        Schema::dropIfExists('narahubungs');
    }
}
