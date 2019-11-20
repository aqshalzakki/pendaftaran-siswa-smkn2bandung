<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nisn', 10);
            $table->string('nama', 40);
            $table->string('nama_ayah', 40);
            $table->string('nama_ibu', 40);
            $table->integer('umur');
            $table->string('jenis_kelamin', 15);
            $table->bigInteger('no_telepon');
            $table->string('agama', 40);
            $table->string('nilai_name', 20);
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
        Schema::dropIfExists('calon_siswa');
    }
}
