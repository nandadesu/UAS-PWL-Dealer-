<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string("nama_mobil");
            $table->integer("harga");
            $table->string("tahun_mobil");
            $table->string("lokasi_mobil");
            $table->bigInteger("merk_id");
            $table->string("warna");
            $table->string("bahan_bakar");
            $table->string("transmisi");
            $table->longText("deskripsi");
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
        Schema::dropIfExists('mobils');
    }
}
