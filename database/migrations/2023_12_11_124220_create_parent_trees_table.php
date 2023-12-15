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
        Schema::create('parent_trees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tom_id')->constrained('cats')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('tabby_id')->constrained('cats')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_trees');
    }
};
