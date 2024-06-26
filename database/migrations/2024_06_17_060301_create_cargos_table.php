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
        Schema::create('cargos', function (Blueprint $table) {
            $table->id('_id')->primary();
            $table->dateTime('_dbTime');
            $table->string('_terminalTime',50);
            $table->string('_groupName',50);

            $table->string('ullageTkP',50);
            $table->string('avgTmpTkP',50);

            $table->string('ullageCot6P',50);
            $table->string('avgTmpCot6P',50);

            $table->string('ullageCot5P',50);
            $table->string('avgTmpCot5P',50);

            $table->string('ullageCot4P',50);
            $table->string('avgTmpCot4P',50);

            $table->string('ullageCot3P',50);
            $table->string('avgTmpCot3P',50);

            $table->string('ullageCot2P',50);
            $table->string('avgTmpCot2P',50);

            $table->string('ullageCot1P',50);
            $table->string('avgTmpCot1P',50);

            $table->string('ullageTkS',50);
            $table->string('avgTmpTkS',50);

            $table->string('ullageCot6S',50);
            $table->string('avgTmpCot6S',50);

            $table->string('ullageCot5S',50);
            $table->string('avgTmpCot5S',50);

            $table->string('ullageCot4S',50);
            $table->string('avgTmpCot4S',50);

            $table->string('ullageCot3S',50);
            $table->string('avgTmpCot3S',50);

            $table->string('ullageCot2S',50);
            $table->string('avgTmpCot2S',50);

            $table->string('ullageCot1S',50);
            $table->string('avgTmpCot1S',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
