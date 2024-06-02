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
        Schema::create(
            'units',
            function (Blueprint $table) {
                $table->id();
                // $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
                $table->string('unit_name')->nullable(true);
                $table->text('unit_desc')->nullable(true);
                $table->string('unit_image')->nullable(true);
                $table->string('price')->nullable(true);
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
