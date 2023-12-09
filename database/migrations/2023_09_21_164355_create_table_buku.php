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
        Schema::create('table_buku', function (Blueprint $table) {
            $table->id();
			$table->string('judul');
			$table->string('penulis');
			$table->string('penerbit');
			$table->string('kodekategori');
            $table->integer('hargabuku');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_buku');
    }
};
