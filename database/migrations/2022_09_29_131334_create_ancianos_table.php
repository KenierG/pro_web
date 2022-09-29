<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAncianosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ancianos', function (Blueprint $table) {
            $table->id('ide_anc');
            $table->string('doc_anc',13);
            $table->string('nom_anc',25);
            $table->string('ape_anc',25);
            $table->char('sex_anc',1);
          $table->date('fec_anc');
            $table->char('trh_anc',3);
            $table->unsignedBigInteger('ide_eps');
            $table->foreign('ide_eps')->references('ide_eps')->on('eps');
            //$table->foreign('ide_eps')->references('ide_eps')->on('eps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ancianos');
    }
}
