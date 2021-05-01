<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDafsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dafsis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('gender_siswa');
            $table->string('nisn')->nullable();
            $table->longText('lahir_siswa');
            $table->longText('tempat_lahir_siswa');
            $table->longText('askol_siswa');
            $table->longText('hp_siswa')->nullable();
            $table->longText('alamat_siswa');
            // ORTU
            $table->string('nama_ortu');
            $table->string('ktp_ortu')->nullable();
            $table->string('kk_ortu')->nullable();
            $table->longText('hp_ortu')->nullable();
            $table->longText('alamat_ortu');
            $table->longText('pekerjaan_ortu');

            // REKOMENDASI
            $table->string('rekomendasi');
            
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
        Schema::dropIfExists('dafsis');
    }
}
