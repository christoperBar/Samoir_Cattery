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
        Schema::create('cattransactions', function (Blueprint $table) {
            $table->id();
            $table->string('adopter');
            $table->string('adopter_contact');
            $table->enum('status', ['canceled', 'pending', 'success', 'expired'])->default('pending');
            $table->decimal('total', 10,2);
            $table->foreignId('cat_id')->constrained('cats')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cattransactions');
    }
};
