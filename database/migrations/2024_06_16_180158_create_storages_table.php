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
        Schema::create('storages', function (Blueprint $table) {
            $table->id('_id')->primary();
            $table->dateTime('_dbTime');
            $table->string('_terminalTime',50);
            $table->string('_groupName',50);
            $table->enum('tank',['one','two','three','four'])->default('one');
            $table->string('heightOfCPO',50);
            $table->string('tStorageWhen0M',50);
            $table->string('tStorageWhen1M',50);
            $table->string('tStorageWhen2M',50);
            $table->string('tStorageWhen3M',50);
            $table->string('tStorageWhen4M',50);
            $table->string('tStorageWhen5M',50);
            $table->string('tStorageWhen6M',50);
            $table->string('tStorageWhen7M',50);
            $table->string('factorKoreksi',50);
            $table->string('density',50);
            $table->string('EstimasiStok',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};
