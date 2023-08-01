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
            $table->increments('product_id');
            $table->unsignedInteger('team_area_id')->nullable(false);
            $table->unsignedInteger('item_number_id')->nullable(false);
            $table->unique(['item_number_id', 'team_area_id']);
            $table->timestamps();
            $table->foreign('team_area_id')->references('team_area_id')->on('teams_areas')->onDelete('cascade');
            $table->foreign('item_number_id')->references('item_number_id')->on('items_numbers')->onDelete('cascade');
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
