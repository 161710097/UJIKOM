<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('no_tlp');
            $table->string('alamat');
            $table->string('kota_kab');
            $table->string('prov');
            $table->integer('kode_pos');
            $table->string('catatan');
            $table->boolean('status')->nullable();
            $table->string('bukti_transfer')->nullable();
            $table->unsignedInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produks')->ondelete('cascade');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
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
        Schema::dropIfExists('transaksis');
    }
}
