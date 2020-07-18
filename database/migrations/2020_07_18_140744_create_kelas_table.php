<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->bigIncrements('id_kelas');
            // $table->integer('id_materi')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('harga');
            $table->string('description');
            $table->string('image');
            $table->string('tingkat');
            // $table->foreign('id_materi')->references('id')->on('materis');
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
        Schema::dropIfExists('kelas');
    }
}
