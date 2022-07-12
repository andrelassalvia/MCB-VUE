<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('servicetype_id');
            $table->foreign('servicetype_id')->references('id')->on('service_types');
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->unsignedBigInteger('orderstatus_id')->nullable();
            $table->foreign('orderstatus_id')->references('id')->on('order_statuses');
            $table->unsignedBigInteger('classification_id')->nullable();
            $table->foreign('classification_id')->references('id')->on('classifications');
            $table->date('finish_date')->nullable();
            $table->float('income', 8,2)->nullable();
            $table->float('cost', 8,2)->nullable();
            $table->float('tax_rate', 8,2)->nullable();
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
        Schema::dropIfExists('service_orders');
    }
}
