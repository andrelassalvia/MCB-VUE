<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel')->unique();
            $table->string('email')->nullable();
            $table->date('birth_date')->nullable();
            $table->boolean('firma_aberta')->nullable();
            $table->boolean('cnh')->nullable();
            $table->boolean('cpf')->nullable();
            $table->boolean('digital_certification')->nullable();
            $table->boolean('rg')->nullable();
            $table->boolean('passport')->nullable();
            $table->unsignedBigInteger('brazilstate_id')->nullable();
            $table->foreign('brazilstate_id')->references('id')->on('brazil_states');
            $table->unsignedBigInteger('brazilcity_id')->nullable();
            $table->foreign('brazilcity_id')->references('id')->on('brazil_cities');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger('clientstatus_id')->nullable();
            $table->foreign('clientstatus_id')->references('id')->on('client_statuses');
            $table->unsignedBigInteger('maritalstatus_id')->nullable();
            $table->foreign('maritalstatus_id')->references('id')->on('marital_statuses');
            $table->unsignedBigInteger('occupation_id')->nullable();
            $table->foreign('occupation_id')->references('id')->on('occupations');
            $table->string('rg_file')->nullable();
            $table->string('passport_file')->nullable();
            $table->string('cnh_file')->nullable();
            $table->string('address_file')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
