<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFk4TrDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_donations', function (Blueprint $table) {
          $table->foreign('idUser')
            ->references('id')->on('users');
          $table->foreign('idTransaction')
            ->references('id')->on('transactions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tr_donations', function (Blueprint $table) {
            //
        });
    }
}
