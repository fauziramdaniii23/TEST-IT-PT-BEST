<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datapegawais', function (Blueprint $table) {
            $table->id();
            $table->string('pegawai_nama',50)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->tinyInteger('pegawai_umur')->length(2)->nullable();
            $table->longText('pegawai_alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('foto',255)->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('hobi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapegawais');
    }
};
