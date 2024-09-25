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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('departemen_id');
            //$table->unsignedBigInteger('jabatan_id')->nullable()->change();
            //$table->foreignId('departemen_id')->constrained('departemens')->onDelete('set null');
            $table->timestamps();

            $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatans');
            $table->foreign('departemen_id')->references('departemen_id')->on('departemens');
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
