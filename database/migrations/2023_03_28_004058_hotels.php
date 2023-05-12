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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'hotelName');
            $table->string(column: 'hotelImage');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_Id')->references('id')->on('country');
            $table->string(column: 'mail')->unique();
            $table->string(column: 'basicFee');
            $table->integer(column: 'max_guest');
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
