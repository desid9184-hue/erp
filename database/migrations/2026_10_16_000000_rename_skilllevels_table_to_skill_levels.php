<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('skilllevels') && ! Schema::hasTable('skill_levels')) {
            Schema::rename('skilllevels', 'skill_levels');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('skill_levels') && ! Schema::hasTable('skilllevels')) {
            Schema::rename('skill_levels', 'skilllevels');
        }
    }
};
