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
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('total', 15, 2)->default(0);
            $table->unsignedBigInteger('guests_id');
            $table->date('date')->nullable();
            $table->string('room_id', 11);
            $table->string('hotel_id', 11);
            $table->string('registered_by', 255);
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->enum('type', ['web', 'call', 'counter'])->default('web');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('guests_id')
                ->references('id')->on('guests')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
