<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->integer('id_kategori')->nullable();
            $table->string('berat')->nullable();
            $table->string('gambar');
            $table->string('keterangan');
            $table->integer('harga');
            $table->string('expired')->nullable();
            $table->string('publish');
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
        Schema::dropIfExists('produk');
    }
}
