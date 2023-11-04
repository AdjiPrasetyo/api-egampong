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
        Schema::create('ktp', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->unsignedBigInteger("kk_id",)->nullable(false);
            $table->string("nama_lengkap", 100)->nullable(false);
            $table->string("tempat_lahir", 50)->nullable(false);
            $table->date("tanggal_lahir",)->nullable(false);
            $table->string("jenis_kelamin", 50)->nullable(false);
            $table->string("agama", 50)->nullable(false);
            $table->string("pendidikan", 50)->nullable(false);
            $table->string("pekerjaan", 50)->nullable(false);
            $table->string("status_perkawinan", 50)->nullable(false);
            $table->string("status_keluarga", 50)->nullable(false);
            $table->string("nama_ayah", 50)->nullable(false);
            $table->string("nama_ibu", 50)->nullable(false);
            $table->timestamps();
            $table->foreign('kk_id')->references('id')->on('kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktp');
    }
};
