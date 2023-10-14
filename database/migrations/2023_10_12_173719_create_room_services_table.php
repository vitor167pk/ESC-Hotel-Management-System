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
        Schema::create('room_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('services_id');
            $table->timestamps();
            $table->date('date')->nullable();
            $table->string('product_id', 11);
            $table->string('status', 255);
            $table->bigInteger('created_by')->unsigned();

            $table->foreign('room_id')
                ->references('id')->on('rooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('services_id')
                ->references('id')->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_services');
    }
};
