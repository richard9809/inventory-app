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
            CREATE TRIGGER `trigger_to_add_quantity_to_w_drugs` 
            AFTER INSERT on invoice_items
            for each row
            BEGIN
                UPDATE `warehouse_drugs` SET `quantity` = `quantity` + NEW.quantity WHERE `drug_id` = NEW.drug_id;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trigger_to_add_quantity_to_w_drugs');
    }
};
