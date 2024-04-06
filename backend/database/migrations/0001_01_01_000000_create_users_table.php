<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->date('regisztracio_datuma');
            $table->string('telefonszam');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('permission')->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'id' => 1,
            'name' => 'Admin', 
            'email' => 'admin@zorotours.com', 
            'regisztracio_datuma' => '2023-01-15',
            'telefonszam' => '+36901234567',
            'email_verified_at' => '2023-01-15',
            'password' => Hash::make('abrakadabra'),
            'permission' => 'admin'
        ]);

        User::create([
            'id' => 2,
            'name' => 'User', 
            'email' => 'user@zorotours.com', 
            'regisztracio_datuma' => '2023-01-15',
            'telefonszam' => '+36901234567',
            'email_verified_at' => '2023-01-15',
            'password' => Hash::make('abrakadabra'),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
