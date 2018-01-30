<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover')->nullable(); // url file, file cover
            $table->string('judul')->nullable();
            $table->string('diskripsi')->nullable();
            $table->string('link_youtube')->nullable();
            $table->integer('kebutuhan_dana')->default(0);
            $table->date('pengembalian_dana')->nullable();
            $table->float('bagi_hasil')->nullable();
            
            // thanks giving
            $table->string('t_judul')->nullable();
            $table->string('t_deskripsi')->nullable();
            
            // relation
            $table->integer('category_campaign_id')->nullable();
            
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('campaigns');
    }
}
