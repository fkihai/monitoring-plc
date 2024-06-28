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
        Schema::create('engines', function (Blueprint $table) {
            $table->id('_id')->primary();
            $table->dateTime('_dbTime');
            $table->string('_terminalTime',50);
            $table->string('_groupName',50);

            $table->string('ea1',50);
            $table->string('ea2',50);
            $table->string('ea3',50);
            $table->string('ea4',50);
            $table->string('ea5',50);
            $table->string('ea6',50);

            $table->string('la1',50);
            $table->string('la2',50);
            $table->string('la3',50);
            $table->string('la4',50);
            $table->string('la5',50);
            $table->string('la6',50);

            $table->string('ba1',50);
            $table->string('ba2',50);
            $table->string('ba3',50);
            $table->string('ba4',50);
            $table->string('ba5',50);
            $table->string('ba6',50);

            $table->string('engineSpeed',50);
            $table->string('crankcase',50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('engines');
    }
};
