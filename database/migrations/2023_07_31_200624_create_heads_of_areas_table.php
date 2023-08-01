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
        Schema::create('heads_of_areas', function (Blueprint $table) {
            $table->increments('head_of_area_id');
            $table->string('surname', 30)->nullable(false);
            $table->string('name', 30)->nullable(false);
            $table->string('f_name', 30)->nullable(false);
            $table->tinyInteger('gender')->nullable(false);
            $table->date('date_of_birth')->nullable(false);
            $table->date('date_of_start')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heads_of_areas');
    }
};
