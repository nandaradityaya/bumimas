<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tki', function (Blueprint $table) {
            $table->id();
            $table->string('kodepc')->nullable();
            $table->string('cabang')->nullable();
            $table->string('kd_sponsor')->nullable();
            $table->enum('tujuan', ['Malaysia', 'Singapore', 'Hongkong', 'Taiwan', 'SaudiArabia', 'UnitedArabEmirates', 'Qatar']);
            $table->string('nama')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('pengalaman', ['EX', 'NON'])->nullable();
            $table->integer('kg_badan')->nullable();
            $table->integer('cm_badan')->nullable();
            $table->string('al_prop')->nullable();
            $table->string('al_kotakab')->nullable();
            $table->string('al_kec')->nullable();
            $table->string('al_kel')->nullable();
            $table->string('al_rtrw')->nullable();
            $table->string('al_lain')->nullable();
            $table->enum('jnkel', ['L', 'P'])->nullable();
            $table->string('nm_pasangan')->nullable();
            $table->string('nm_ibu')->nullable();
            $table->string('nm_ayah')->nullable();
            $table->string('nm_kakek')->nullable();
            $table->integer('jml_anak')->nullable();
            $table->string('nik')->nullable();
            $table->string('nokk')->nullable();
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $table->text('png_kerja')->nullable();
            $table->text('catatan')->nullable();
            $table->string('user_entry')->nullable();
            $table->string('user_aprov')->nullable();
            $table->string('stat_data')->nullable();
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
        Schema::dropIfExists('tki');
    }
};
