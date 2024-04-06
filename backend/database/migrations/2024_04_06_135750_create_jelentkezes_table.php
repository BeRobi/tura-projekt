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
        Schema::create('jelentkezes', function (Blueprint $table) {
            $table->primary(['user_id', 'tura_id']);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('tura_id')->references('id')->on('turas');
            $table->date('jelentkezes_datuma');
            $table->boolean('fizetve')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jelentkezes');
    }
};
