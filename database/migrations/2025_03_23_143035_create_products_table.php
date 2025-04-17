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
            $table->string('name');
            $table->string('main_category');
            $table->string('sub_category_1');
            $table->string('sub_category_2');
            $table->decimal('listed_price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->string('weight');
            $table->integer('quantity');
            $table->string('main_image')->nullable();
            $table->string('sub_image_1')->nullable();
            $table->string('sub_image_2')->nullable();
            $table->string('video')->nullable();
            $table->text('description')->nullable();
            $table->string('author');
            $table->string('publisher_isbn');
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
