<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gender');
            $table->integer('umur');
            $table->string('asal');
            $table->string('tempat_tinggal');
            $table->date('tanggal_lahir');
            $table->string('nama_orang_tua');
            $table->string('asal_sekolah');
            $table->text('alasan');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
