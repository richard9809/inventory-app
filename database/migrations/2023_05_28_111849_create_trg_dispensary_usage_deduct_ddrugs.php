<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            create or replace trigger trg_dispensary_usage_deduct_ddrugs
            after insert on dispensary_inventories
            for each row
            begin
                update dispensary_drugs set quantity =  quantity - new.quantity where drug_id = new.drug_id and dispensary_id = new.dispensary_id;
            end;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trg_dispensary_usage_deduct_ddrugs');
    }
};
