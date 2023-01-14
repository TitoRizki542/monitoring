<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('alamat');
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
        Schema::dropIfExists('anaks');
    }
}
