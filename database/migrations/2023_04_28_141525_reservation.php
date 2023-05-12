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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('customerName');
            $table->string('customerMail');
            $table->string('customerAddress');
            $table->string('countryName');
            $table->unsignedBigInteger('room_info_id');
            $table->foreign('room_info_id')->references('id')->on('room_info');
            $table->date('firstDate');
            $table->date('lastDate');
            $table->string('discountCode');
            $table->boolean('paymentFlag');
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
