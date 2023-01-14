<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekaps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->date('tanggal');
            $table->enum('hari',['senin','selasa','rabu','kamis','jumat','sabtu','minggu']);
            $table->string('tinggi_badan_sebelum');
            $table->string('tinggi_badan_sesudah');
            $table->string('berat_badan_sebelum');
            $table->string('berat_badan_sesudah');
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
        Schema::dropIfExists('rekaps');
    }
}
