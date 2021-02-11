<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->integer('Nis');
            $table->text('Alamat');
            $table->text('No_Telpon');
            $table->text('Jenis_Kelamin');
            $table->text('Nama_OrangTua');
            $table->text('Foto');
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
        Schema::dropIfExists('Siswa');
    }
}
