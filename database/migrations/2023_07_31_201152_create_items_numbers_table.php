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
        Schema::create('items_numbers', function (Blueprint $table) {
            $table->increments('item_number_id');
            $table->string('u_code', 255)->nullable(true);
            $table->unsignedInteger('t_item_id')->nullable(false);
            $table->timestamps();
            $table->foreign('t_item_id')->references('t_item_id')->on('types_of_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_numbers');
    }
};
