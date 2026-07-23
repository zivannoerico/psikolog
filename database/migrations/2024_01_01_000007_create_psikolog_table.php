<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psikolog', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gelar')->nullable();
            $table->string('spesialisasi')->nullable();
            $table->string('foto')->nullable();
            $table->text('bio')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->boolean('aktif')->default(true);
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('psikolog');
    }
};
