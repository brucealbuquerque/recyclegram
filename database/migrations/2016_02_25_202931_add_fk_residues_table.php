<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkResiduesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('residues', function (Blueprint $table) {
          $table->foreign('idTpResidues')
            ->references('id')->on('tp_residues');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('residues', function (Blueprint $table) {
            //
        });
    }
}
