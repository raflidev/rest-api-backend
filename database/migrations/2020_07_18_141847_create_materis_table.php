<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materis', function (Blueprint $table) {
            // $table->id();
            $table->bigIncrements('id_materi');
            $table->string('judul');
            $table->integer('episode');
            $table->string('slug');
            $table->string('video');
            // $table->integer('id_kelas')->unsigned();
            // $table->foreign('id_kelas')->references('id_kelas')->on('');
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
        Schema::dropIfExists('materis');
    }
}
