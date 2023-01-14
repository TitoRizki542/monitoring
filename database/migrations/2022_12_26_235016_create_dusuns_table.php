<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDusunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dusuns', function (Blueprint $table) {
        $table->id();
        $table->foreignId('anak_id')->constrained('anaks');
        $table->string('nama_dusun');
        $table->string('jumlah_penduduk');
        $table->integer('rt');
        $table->integer('rw');
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
        Schema::dropIfExists('dusuns');
    }
}
