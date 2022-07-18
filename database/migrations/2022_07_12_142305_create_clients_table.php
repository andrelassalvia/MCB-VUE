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
            $table->foreignId('brazil_state_id')->nullable()->constrained();
            $table->foreignId('brazil_city_id')->nullable()->constrained();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->foreignId('city_id')->nullable()->constrained();
            $table->foreignId('client_status_id')->nullable()->constrained();
            $table->foreignId('marital_status_id')->nullable()->constrained();
            $table->foreignId('occupation_id')->nullable()->constrained();
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
