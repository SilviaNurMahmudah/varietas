<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varietas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('varietas');
            $table->string('cita_rasa');
            $table->string('bentuk_buah');
            $table->string('ukuran_buah');
            $table->string('warna_kulit');
            $table->string('warna_daging');
            $table->string('produktivitas');
            $table->string('area_pengembangan');
            $table->integer('ketinggian_awal');
            $table->integer('ketinggian_akhir');
            $table->string('asal_pohon_induk');
            $table->string('sentra_produksi');
            $table->year('tahun_pelepasan');
            $table->string('imageUrl');
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
        Schema::dropIfExists('varietas');
    }
}
