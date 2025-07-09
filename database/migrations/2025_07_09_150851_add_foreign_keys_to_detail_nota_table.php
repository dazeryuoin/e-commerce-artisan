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
        Schema::table('detail_nota', function (Blueprint $table) {
            $table->foreign(['tokos_id_toko'], 'fk_detail_nota_tokos1')->references(['id_toko'])->on('tokos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['notas_id', 'notas_users_id'], 'fk_products_has_notas_notas1')->references(['id', 'users_id'])->on('notas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['products_id'], 'fk_products_has_notas_products1')->references(['id'])->on('products')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_nota', function (Blueprint $table) {
            $table->dropForeign('fk_detail_nota_tokos1');
            $table->dropForeign('fk_products_has_notas_notas1');
            $table->dropForeign('fk_products_has_notas_products1');
        });
    }
};
