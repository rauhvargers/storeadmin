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
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->integer('production_year');
            $table->decimal('nominal_price');
            $table->string('url', 255)->unique();
            $table->decimal('price');
            $table->datetime('available_from');
            $table->integer('stock');
            $table->integer('max_limit');
            $table->foreignId('artist_id')->constrained()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('description',1000)->default('');
            $table->string('image', 255)->default('');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coins');
    }
};
