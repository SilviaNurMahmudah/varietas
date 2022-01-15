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
            $table->bigInteger('bentuk_id')->nullable();
            $table->bigInteger('ukuran_id')->nullable();
            $table->bigInteger('warna_kulit_id')->nullable();
            $table->bigInteger('warna_daging_id')->nullable();
            $table->string('cita_rasa')->nullable();
            $table->string('produktivitas')->nullable();
            $table->string('area_pengembangan');
            $table->integer('ketinggian_awal');
            $table->integer('ketinggian_akhir');
            $table->string('asal_pohon_induk')->nullable();
            $table->string('sentra_produksi')->nullable();
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
