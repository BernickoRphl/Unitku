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
            'products',
            function (Blueprint $table) {
                $table->id();
                // $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
                $table->string('product_name')->nullable(true);
                $table->text('product_desc')->nullable(true);
                $table->string('product_image')->nullable(true);
                $table->string('price')->nullable(true);
                $table->string('color')->nullable(true);
                // $table->foreignId('category_id')->constrained()->cascadeOnDelete();
                $table->foreignId('edition_id')->nullable()->constrained()->cascadeOnDelete();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
