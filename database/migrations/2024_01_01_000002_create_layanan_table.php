<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_layanan_id')->constrained('kategori_layanan')->cascadeOnDelete();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('ikon')->nullable();
            $table->string('gambar')->nullable();
            $table->string('alt_gambar')->nullable();
            $table->text('deskripsi_singkat');
            $table->longText('deskripsi_lengkap')->nullable();
            $table->json('manfaat')->nullable(); // list of benefits
            $table->json('proses')->nullable();  // step-by-step process
            $table->boolean('aktif')->default(true);
            $table->integer('urutan')->default(0);
            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
