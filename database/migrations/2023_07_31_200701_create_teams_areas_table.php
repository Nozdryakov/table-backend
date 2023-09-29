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
        Schema::create('teams_areas', function (Blueprint $table) {
            $table->increments('team_area_id');
            $table->unsignedInteger('area_id')->nullable(false);
            $table->unsignedInteger('team_id')->nullable(false);
            $table->unique(['area_id', 'team_id']);
            $table->timestamps();
            $table->foreign('area_id')->references('area_id')->on('areas')->onDelete('cascade');
            $table->foreign('team_id')->references('team_id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams_areas');
    }
};
