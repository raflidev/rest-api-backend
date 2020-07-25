<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKelasIdToMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->foreignId('kelas_id')->nullable()->after('id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('kelas_id');
        });
    }
}