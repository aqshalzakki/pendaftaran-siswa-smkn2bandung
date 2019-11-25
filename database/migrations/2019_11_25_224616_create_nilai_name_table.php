<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiNameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_name', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_calon');
            $table->bigInteger('id_staff');
            
            $table->integer('b_indonesia');
            $table->integer('b_inggris');
            $table->integer('matematika');
            $table->integer('ipa');
            
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
        Schema::dropIfExists('nilai_name');
    }
}
