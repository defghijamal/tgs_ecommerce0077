<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kursus');
            $table->string('foto_kursus'); // URL atau path untuk foto kursus
            $table->string('foto_pengajar'); // URL atau path untuk foto instruktur
            $table->string('nama_pengajar');
            $table->string('pekerjaan_pengajar');
            $table->unsignedTinyInteger('rating')->default(0); // nilai antara 0-5
            $table->decimal('harga', 10, 2); // harga kursus
            $table->decimal('diskon', 10, 2)->nullable(); // diskon, jika ada
            $table->enum('type', ['online', 'offline']); // tipe kursus
            $table->unsignedInteger('stok'); // slot atau stok kursus
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
