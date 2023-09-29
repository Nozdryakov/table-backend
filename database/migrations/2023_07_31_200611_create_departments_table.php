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
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('dep_id');
            $table->string('title',255)->nullable(false);
            $table->unsignedInteger('head_of_dep_id')->nullable(false)->unique();
            $table->foreign('head_of_dep_id')->references('head_of_dep_id')->on('heads_of_departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
