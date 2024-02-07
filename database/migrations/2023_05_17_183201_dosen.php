<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('program_studi');
            $table->string('deskripsi');
            $table->integer('nidn');
            $table->string('email');
            $table->string('spesialis');
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
        Schema::dropIfExists('table_dosen');
    }
}
