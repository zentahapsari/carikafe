<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 300);
            $table->string('alamat', 500);
            $table->integer('daerah');
            $table->string('nomor_telpon');
            $table->integer('kategori');
            $table->string('barista');
            $table->string('keterangan',500);
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
        Schema::dropIfExists('cafes');
    }
}
