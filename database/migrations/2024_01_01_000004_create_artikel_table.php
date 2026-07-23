<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_artikel_id')->nullable()->constrained('kategori_artikel')->nullOnDelete();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('konten');
            $table->string('gambar_utama')->nullable();
            $table->string('alt_gambar')->nullable();
            $table->string('penulis')->nullable();
            $table->json('tags')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamp('published_at')->nullable();
            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
