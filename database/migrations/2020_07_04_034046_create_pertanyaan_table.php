<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id_pertanyaan');
            $table->string('nama_judul');
            $table->text('isi');
            $table->date('tgl_dibuat');
            $table->date('tgl_diperbaharui');
            $table->integer('vote')->nullable();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
