<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('lokasi');
            $table->text('reminder');
            $table->text('jenis_kegiatan');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
