<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokMapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_mapel', function (Blueprint $table) {
            $table->foreignId('id_guru')->constrained('guru')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_mapel')->constrained('mapel')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kelas')->constrained('kelas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok_mapel');
    }
}
