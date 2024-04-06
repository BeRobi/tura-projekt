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
        Schema::create('turas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipus_id')->references('tipus_id')->on('turatipuses');
            $table->date('idopont');
            $table->foreignId('turavezeto')->references('id')->on('turavezetos');
            $table->integer('ar');
            $table->integer('min_letszam');
            $table->integer('max_letszam');
            $table->integer('statusz')->default(0);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turas');
    }
};
