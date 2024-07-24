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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->constrained()->cascadeOnDelete();
            $table->string('tag_id')->constrained()->cascadeOnDelete();
            $table->text('name');
            $table->decimal('amount', 8, 2)->nullable();
            $table->decimal('discount', 5, 2)->nullable();
            $table->decimal('promo_price', 8, 2)->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
