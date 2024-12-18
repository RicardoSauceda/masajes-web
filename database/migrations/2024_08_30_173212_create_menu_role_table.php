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
        Schema::create('menu_role', function (Blueprint $table) {
            $table->foreignId('menu_id')->constrained()->cascadeOnDelete();
            $table->foreignId('role_id')->constrained()->cascadeOnDelete();
            $table->timestamps();

            $table->primary(['menu_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menu_role', function (Blueprint $table) {
            $table->dropForeign(['menu_id']);
            $table->dropForeign(['role_id']);
        });
        Schema::dropIfExists('menu_role');
    }
};
