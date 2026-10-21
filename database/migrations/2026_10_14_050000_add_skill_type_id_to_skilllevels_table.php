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
        if (! Schema::hasColumn('skill_levels', 'skill_type_id')) {
            Schema::table('skill_levels', function (Blueprint $table) {
                $table->foreignId('skill_type_id')->nullable()->after('id');
            });
        }

        if (Schema::hasColumn('skill_levels', 'skill_type_id')) {
            Schema::table('skill_levels', function (Blueprint $table) {
                $table->foreign('skill_type_id')->references('id')->on('skill_types')->cascadeOnDelete();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('skill_levels', 'skill_type_id')) {
            Schema::table('skill_levels', function (Blueprint $table) {
                $table->dropForeign(['skill_type_id']);
                $table->dropColumn('skill_type_id');
            });
        }
    }
};
