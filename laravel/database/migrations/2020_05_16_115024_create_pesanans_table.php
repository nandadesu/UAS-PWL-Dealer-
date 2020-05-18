<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("mobil_id")->nullable();
            $table->string("nama_pemesan")->nullable();
            $table->string("metode_pembayaran")->nullable();
            $table->string("kode_pesanan")->nullable();
            $table->string("sudah_dipesan")->nullable();
            $table->string("no_hp")->nullable();
            $table->string("no_hp_alt")->nullable();
            $table->string("alamat")->nullable();
            $table->integer("no_ktp")->nullable();
            $table->boolean("is_angsuran")->nullable();
            $table->integer("angsuran")->nullable();
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
        Schema::dropIfExists('pesanans');
    }
}
