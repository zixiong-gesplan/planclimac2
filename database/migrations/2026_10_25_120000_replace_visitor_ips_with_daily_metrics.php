<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Replace historic IP-address records with daily metrics and temporary
     * daily identifiers. Running this migration removes the existing raw IPs.
     */
    public function up(): void
    {
        Schema::create('visitor_daily_metrics', function (Blueprint $table) {
            $table->id();
            $table->date('visit_date')->unique();
            $table->unsignedInteger('unique_visitors')->default(0);
            $table->timestamps();
        });

        Schema::create('visitor_daily_identifiers', function (Blueprint $table) {
            $table->id();
            $table->date('visit_date');
            $table->char('visitor_hash', 64);
            $table->timestamps();
            $table->unique(['visit_date', 'visitor_hash']);
            $table->index('visit_date');
        });

        Schema::dropIfExists('visitors');
    }

    /**
     * Raw IP records cannot be restored after the privacy-preserving migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_daily_identifiers');
        Schema::dropIfExists('visitor_daily_metrics');
    }
};
