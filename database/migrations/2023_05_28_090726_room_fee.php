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
        Schema::create('room_fee', function (Blueprint $table) {
            $table->id();
            $table->integer(column: 'roomFee');
            $table->unsignedBigInteger('room_info_id');
            $table->foreign('room_info_id')->references('id')->on('room_info');
            $table->unsignedBigInteger('tax_id');
            $table->foreign('tax_id')->references('id')->on('tax');
            $table->date(column: 'expiryFromDate');
            $table->date(column: 'expiryToDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
