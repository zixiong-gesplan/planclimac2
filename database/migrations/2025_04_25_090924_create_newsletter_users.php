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
        Schema::create('newsletter_users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 128)->unique();
            // $table->string('language', 6)->default(NewsletterLanguage::ENGLISH->value);
            // $table->boolean('is_verified')->default(false);
            // $table->string('verification_token', 60)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletter_users');
    }
};
