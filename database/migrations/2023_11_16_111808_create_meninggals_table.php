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
        Schema::create('meninggal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ktp_id')->nullable(false);
            $table->timestamps();
            $table->foreign('ktp_id')->references('id')->on('ktp')->onUpdate('cascade')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meninggal');
    }
};
