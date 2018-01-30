<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('nim')->unique();
            $table->string('university')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat_sekarang')->nullable();
            $table->string('alamat_asal')->nullable();
            $table->string('link_ig')->unique();
            $table->string('link_linkedin')->unique();
            $table->string('foto_profile')->nullable(); // url file
            $table->string('foto_ktp')->nullable(); // url file
            $table->string('krs')->nullable(); // url file, kartu rencana studi saat ini
            $table->string('spk')->nullable(); // url file, surat pernyataan kesanggupan

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('students');
    }
}
