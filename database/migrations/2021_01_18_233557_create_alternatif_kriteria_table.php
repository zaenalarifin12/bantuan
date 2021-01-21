<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternatifKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif_kriteria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("alternatif_id");
            $table->integer("kriteria_id");
            $table->integer("sub_kriteria_id");
            $table->float("nilai");
            $table->timestamps();

            $table->foreign('kriteria_id')->references('id')->on('kriteria')->onDelete('cascade');
            $table->foreign('altenatif_id')->references('id')->on('altenatif')->onDelete('cascade');
            $table->foreign('sub_kriteria_id')->references('id')->on('altenatif')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif_kriteria');
    }
}
