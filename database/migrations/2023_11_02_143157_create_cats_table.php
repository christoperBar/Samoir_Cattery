<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('cat_name');
            $table->string('birthday');
            $table->string('color');
            $table->string('cat_photo')->nullable();
            $table->enum('can_adopt', ['yes', 'no'])->default('no');
            $table->enum('maturity', ['kitten', 'adult'])->default('kitten');
            $table->enum('gender', ['jantan', 'betina'])->default('jantan');
            $table->foreignId('ras_id')->constrained('rases');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cats');
    }
};
