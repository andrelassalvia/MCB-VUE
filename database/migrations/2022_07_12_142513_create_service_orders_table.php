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
            $table->foreignId('client_id')->constrained();
            $table->foreignId('service_type_id')->constrained();
            $table->foreignId('provider_id')->constrained();
            $table->foreignId('order_status_id')->nullable()->constrained();
            $table->foreignId('classification_id')->nullable()->constrained();
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
