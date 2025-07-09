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
        Schema::create('payments', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->enum('jenis_payment', ['cash', 'qris'])->nullable();
            $table->integer('detail_nota_products_id');
            $table->integer('detail_nota_notas_id');
            $table->integer('detail_nota_notas_users_id');
            $table->integer('detail_nota_tokos_id_toko');

            $table->index(['detail_nota_products_id', 'detail_nota_notas_id', 'detail_nota_notas_users_id', 'detail_nota_tokos_id_toko'], 'fk_payments_detail_nota1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
