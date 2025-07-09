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
        Schema::table('payments', function (Blueprint $table) {
            $table->foreign(['detail_nota_products_id', 'detail_nota_notas_id', 'detail_nota_notas_users_id', 'detail_nota_tokos_id_toko'], 'fk_payments_detail_nota1')->references(['products_id', 'notas_id', 'notas_users_id', 'tokos_id_toko'])->on('detail_nota')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('fk_payments_detail_nota1');
        });
    }
};
