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
            $table->bigInteger('ukuran_id')->unsigned();
            $table->bigInteger('bentuk_id')->unsigned();
            $table->bigInteger('warna_kulit_id')->unsigned();
            $table->bigInteger('warna_daging_id')->unsigned();
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

            $table->foreign('ukuran_id')->references('id')->on('ukurans')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bentuk_id')->references('id')->on('bentuks')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('warna_kulit_id')->references('id')->on('warna_kulits')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('warna_daging_id')->references('id')->on('warna_dagings')
                ->onDelete('cascade')->onUpdate('cascade');
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
