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
        Schema::create('detail_nota', function (Blueprint $table) {
            $table->integer('products_id')->index('fk_products_has_notas_products1_idx');
            $table->integer('notas_id');
            $table->integer('notas_users_id');
            $table->string('total_bayar', 45)->nullable();
            $table->integer('tokos_id_toko')->index('fk_detail_nota_tokos1_idx');

            $table->index(['notas_id', 'notas_users_id'], 'fk_products_has_notas_notas1_idx');
            $table->primary(['products_id', 'notas_id', 'notas_users_id', 'tokos_id_toko']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_nota');
    }
};
