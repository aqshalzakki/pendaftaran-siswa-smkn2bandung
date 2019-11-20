<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangtuaCalonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtua_calon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_calon');
            $table->string('nama_ayah', 50);
            $table->string('nama_ibu', 50);
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
        Schema::dropIfExists('orangtua_calon');
    }
}
