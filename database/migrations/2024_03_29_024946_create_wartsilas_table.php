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
        Schema::create('wartsilas', function (Blueprint $table) {
            $table->id('_id')->primary();
            $table->dateTime('_dbTime');
            $table->string('_terminalTime',50);
            $table->string('_groupName',50);
            $table->string('turboRPM',50);
            $table->string('airChargePress',50);
            $table->string('airChargeTemp',50);
            $table->string('speedRPM',50);
            $table->string('speedRefRPM',50);
            $table->string('loadRPM',50);
            $table->string('fuelOilPress',50);
            $table->string('fuelOilTemp',50);
            $table->string('ltWaterPress',50);
            $table->string('ltWaterTemp',50);
            $table->string('htWaterPress',50);
            $table->string('htWaterTemp',50);
            $table->string('crankcasePress',50);
            $table->string('airStartPress',50);
            $table->string('lubeOilPress',50);
            $table->string('lubeOilTemp',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wartsilas');
    }
};


