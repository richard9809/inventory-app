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
        Schema::create('dispensary_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dispensary_id')->constrained()->cascadeOnDelete();
            $table->foreignId('drug_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispensary_inventories');
    }
};
