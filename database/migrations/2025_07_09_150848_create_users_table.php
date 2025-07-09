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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 45)->nullable();
            $table->string('alamat', 45)->nullable();
            $table->string('no_telepon', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('password', 100)->nullable();
            $table->enum('role', ['user', 'admin'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
