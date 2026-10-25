<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('sessions') && Schema::hasColumn('sessions', 'ip_address')) {
            DB::table('sessions')->update(['ip_address' => null]);
        }
    }

    public function down(): void
    {
        // Previously stored IP addresses are intentionally not restored.
    }
};
