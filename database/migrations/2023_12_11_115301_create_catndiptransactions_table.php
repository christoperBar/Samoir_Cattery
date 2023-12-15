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
        Schema::create('catndiptransactions', function (Blueprint $table) {
            $table->id();
            $table->string('buyer');
            $table->string('buyer_contact');
            $table->enum('status', ['canceled', 'pending', 'success', 'expired'])->default('pending');
            $table->decimal('total', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catndiptransactions');
    }
};
