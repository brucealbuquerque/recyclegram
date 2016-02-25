<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFk3TrDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tr_donations', function (Blueprint $table) {
          $table->integer('idUser')->unsigned();
          $table->integer('idTransaction')->unsigned();
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
