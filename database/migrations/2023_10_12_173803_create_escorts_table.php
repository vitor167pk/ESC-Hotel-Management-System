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
        Schema::create('escorts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('last_name', 255);
            $table->string('cpf', 11);
            $table->string('registered_by', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escorts');
    }
};
