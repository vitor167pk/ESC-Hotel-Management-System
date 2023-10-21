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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('last_name', 255);
            $table->string('cpf', 11);
            $table->string('birthday', 255);
            $table->char('sex', 1);
            $table->string('emergency_phone', 14);
            $table->string('cep', 10);
            $table->string('street', 150);
            $table->string('neighborhood', 20);
            $table->string('city', 50);
            $table->char('state', 2);
            $table->integer('registered_by')->unsigned(); // Chave estrangeira
            $table->string('email')->unique()->nullable();
            $table->string('phone', 20)->unique()->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
