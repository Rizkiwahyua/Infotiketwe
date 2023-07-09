<?php
// $table->string('nama_konser');
// $table->string('tanggal');
// $table->string('lokasi');
// $table->string('penyanyi');
// $table->string('harga_tiket');
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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('nama_acara');
            $table->string('tanggal');
            $table->string('lokasi');
            $table->string('status');
            $table->string('no_hp');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
