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
        Schema::create('dispensary_drugs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dispensary_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('drug_id')->constrained('drugs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispensary_drugs');
    }
};
