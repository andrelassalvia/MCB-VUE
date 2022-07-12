<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->string('tel')->unique();
            $table->string('email')->nullable();
            $table->string('zap')->nullable();
            $table->unsignedBigInteger('brazilstate_id')->nullable();
            $table->foreign('brazilstate_id')->references('id')->on('brazil_states');
            $table->unsignedBigInteger('brazilcity_id')->nullable();
            $table->foreign('brazilcity_id')->references('id')->on('brazil_cities');
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
        Schema::dropIfExists('providers');
    }
}
