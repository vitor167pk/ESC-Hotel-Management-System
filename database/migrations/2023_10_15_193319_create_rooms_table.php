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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('floor');
            $table->unsignedInteger('room_no');
            $table->unsignedBigInteger('room_type_id');
            $table->text('description');
            $table->string('price_per_day', 255);
            $table->bigInteger('branch_id')->unsigned();
            $table->string('status', 11);
            $table->string('status_reservation', 255);
            $table->bigInteger('created_by')->unsigned();
            $table->timestamps();
            $table->foreign('room_type_id')
                ->references('id')->on('room_types')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
