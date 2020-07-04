<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id_jawaban');
            $table->text('isi');
            $table->date('tgl_dibuat');
            $table->date('tgl_diperbaharui');
            $table->integer('vote')->nullable();
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->integer('id_pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
