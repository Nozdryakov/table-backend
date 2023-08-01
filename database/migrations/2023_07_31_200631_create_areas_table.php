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
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('area_id');
            $table->string('title',120)->nullable(false);
            $table->unsignedInteger('dep_id')->nullable(false);
            $table->unsignedInteger('head_of_area_id')->nullable(false)->unique();
            $table->timestamps();
            $table->foreign('head_of_area_id')->references('head_of_area_id')->on('heads_of_areas')->onDelete('cascade');
            $table->foreign('dep_id')->references('dep_id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
