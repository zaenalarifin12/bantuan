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
            $table->unsignedInteger("alternatif_id");
            $table->unsignedInteger("kriteria_id");
            $table->unsignedInteger("sub_kriteria_id");
            $table->float("nilai");
            $table->timestamps();

            $table->foreign('kriteria_id')->references('id')->on('kriteria')->onDelete('cascade');
            $table->foreign('alternatif_id')->references('id')->on('alternatif')->onDelete('cascade');
            $table->foreign('sub_kriteria_id')->references('id')->on('sub_kriteria')->onDelete('cascade');
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
