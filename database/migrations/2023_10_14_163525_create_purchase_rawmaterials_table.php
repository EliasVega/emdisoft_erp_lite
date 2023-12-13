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
        Schema::create('purchase_rawmaterials', function (Blueprint $table) {
            $table->id();

            $table->decimal('quantity', 10, 2);
            $table->decimal('price', 11, 2);
            $table->decimal('tax_rate', 10, 2);
            $table->decimal('subtotal', 11, 2);
            $table->decimal('tax_subtotal', 11, 2);

            $table->foreignId('purchase_id')->constrained()->onUpdate('restrict');
            $table->foreignId('raw_material_id')->constrained()->onUpdate('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_rawmaterials');
    }
};
