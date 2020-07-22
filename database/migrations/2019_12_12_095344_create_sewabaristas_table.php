<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewabaristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewabaristas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cafe');
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_telpon');
            $table->date('tanggal');
            $table->string('acara');
            $table->string('tempat');
            $table->string('keterangan');
            $table->integer('id_user');
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
        Schema::dropIfExists('sewabaristas');
    }
}
