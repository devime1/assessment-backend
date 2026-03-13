<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hazards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assessment_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('severity', 50)->nullable();
            $table->string('likelihood', 50)->nullable();
            $table->string('risk_level', 20)->default('Low');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hazards');
    }
};
