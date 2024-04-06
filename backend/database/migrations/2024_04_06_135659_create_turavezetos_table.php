<?php

use App\Models\Turavezeto;
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
        Schema::create('turavezetos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('cim');
            $table->string('telefonszam');
            $table->date('belepesdatuma');
            //$table->timestamps();
        });  
        
        Turavezeto::create([
            'id' => 1,
            'name' => "Karcsi",
            'email' => "karcsi@zorotour.hu",
            'cim' => "1212 Csepel u. 2.",
            'telefonszam' => "+36901234567",
            'belepesdatuma' => "2020-05-15",
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turavezetos');
    }
};
