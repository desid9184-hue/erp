<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class SkilllevelSchemaTest extends TestCase
{
    use RefreshDatabase;

    public function test_skill_levels_table_has_skill_type_id_column(): void
    {
        $this->assertContains('skill_type_id', Schema::getColumnListing('skill_levels'));
    }
}
