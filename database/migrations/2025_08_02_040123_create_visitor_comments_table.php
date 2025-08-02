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
        Schema::create('visitor_comments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Optional name
            $table->string('email')->nullable(); // Optional email
            $table->text('comment');
            $table->string('ip_address')->nullable();
            $table->boolean('is_approved')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_comments');
    }
};
