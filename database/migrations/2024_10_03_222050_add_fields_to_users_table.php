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
        Schema::table('users', function (Blueprint $table) {
        $table->string('cpf')->nullable();
        $table->date('birthdate')->nullable();
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('city')->nullable();
        $table->string('state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cpf');
            $table->dropColumn('birthdate');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('state');
        });
    }
};
