<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->integer('harga_barang');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
