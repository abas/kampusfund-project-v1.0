<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('ktp')->nullable();
            $table->string('no_hp')->nullable();
            $table->integer('invest_min')->default(0);
            $table->integer('invest_max')->default(0);
            $table->string('pref_invest')->nullable();
            $table->enum('invest_type',['personal','corporate'])->nullable();
            $table->string('foto_profile')->nullable(); // url file
            $table->string('foto_ktp')->nullable(); //url file

            $table->enum('alamat_type',['personal','corporate'])->nullable();
            $table->string('alamat')->nullable();

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
        Schema::dropIfExists('investors');
    }
}
