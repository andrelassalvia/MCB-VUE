<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->unsignedBigInteger('usertype_id')->after('name')->nullable();
            $table->foreign('usertype_id')->references('id')->on('user_types');
            $table->boolean('status')->default(1)->after('usertype_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropForeign('users_usertype_id_foreign');
            $table->dropColumn('usertype_id');                     
            $table->dropColumn('status');                     
        });
    }
}
