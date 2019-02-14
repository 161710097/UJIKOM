<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->unsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategori_produks')->onUpdate('cascade')->onDelete('cascade');
            $table->double('harga');
            $table->integer('diskon');
            $table->date('tanggal_diskon');
            $table->longText('deskripsi');
            $table->integer('stock');
            $table->string('slug');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('produks');
    }
}
