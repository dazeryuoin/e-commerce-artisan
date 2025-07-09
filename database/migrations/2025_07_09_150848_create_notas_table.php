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
        Schema::create('notas', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('users_id')->index('fk_notas_users1_idx');
            $table->dateTime('tanggal_pembelian')->nullable();
            $table->enum('status_pemesanan', ['pending', 'dibayar', 'diproses', 'dikirim', 'selesai', 'dibatalkan'])->nullable();
            $table->integer('no_resi')->nullable();
            $table->string('catatan', 100)->nullable();

            $table->primary(['id', 'users_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
