<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_inventaris', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('nama');
            $table->string('spesifikasi');
            $table->date('tahun');
            $table->double('harga');
            $table->string('foto');
            $table->double('jumlah');
            $table->string('satuan');
            $table->string('kondisi');

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
        Schema::dropIfExists('model_inventaris');
    }
}
