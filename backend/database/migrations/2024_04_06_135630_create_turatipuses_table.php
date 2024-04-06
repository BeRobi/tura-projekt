<?php

use App\Models\Turatipus;
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
        Schema::create('turatipuses', function (Blueprint $table) {
            $table->id('tipus_id');
            $table->string('turanev');
            $table->string('tajegyseg');
            $table->string('nehezseg');
            $table->integer('tavolsag');
            $table->integer('szintkulonbseg');
            $table->boolean('kerekpar');
            $table->string('indulashelye');
            $table->string('erkezeshelye');
            $table->string('leiras');
            //$table->timestamps();
        });

        /*Turatipus::create([
            'tipus_id' => 1,
            'turanev' => "Lankás",
            'tajegyseg' => "Balaton felvidék",
            'nehezseg' => "közepes",
            'tavolsag' => "20",
            'szintkulonbseg' => "500",
            'kerekpar' => "1",
            'indulashelye' => "Balatonszemes",
            'erkezeshelye' => "Tihany",
            'leiras' => "üres",
        ]); */
        Turatipus::create([
            'tipus_id' => 1,
            'turanev' => "Nagybörzsönyi_kör",
            'tajegyseg' => "Börzsöny",
            'nehezseg' => "nehéz",
            'tavolsag' => "51",
            'szintkulonbseg' => "900",
            'kerekpar' => "1",
            'indulashelye' => "Szob",
            'erkezeshelye' => "Szob",
            'leiras' => "Szob-Ipolynádasd-Letkés-Ipolytölgyes-Nagybörzsöny--Farkas-völgy--Nagyírtás-Kisinóczi th.-Kóspallag-Márianosztra-Szob",
        ]); 
        
        Turatipus::create([
            'tipus_id' => 2,
            'turanev' => "Pilis_kör",
            'tajegyseg' => "Pilis",
            'nehezseg' => "nehéz",
            'tavolsag' => "42",
            'szintkulonbseg' => "800",
            'kerekpar' => "1",
            'indulashelye' => "Dorog",
            'erkezeshelye' => "Dorog",
            'leiras' => "Dorog-Kesztölc-Klastrompuszta-PilisSzántó-Pilisszentkereszt--Két-bükkfa-nyereg--Pilisszentlélek--Esztergom-Kertváros--Dorog",
        ]);
        
        Turatipus::create([
            'tipus_id' => 3,
            'turanev' => "Dunakanyar_kör",
            'tajegyseg' => "Dunakanyar",
            'nehezseg' => "nehéz",
            'tavolsag' => "55",
            'szintkulonbseg' => "600",
            'kerekpar' => "1",
            'indulashelye' => "Szentendre",
            'erkezeshelye' => "Szentendre",
            'leiras' => "Szentendre-Skanzen--Papp-rét---Apátkúti-völgy-Visegrád-Nagymaros-Kismaros-Verőce-Vác-Tahitótfalu-Pócsmegyer-Szentendrei-sziget-Szentendre",
        ]);
         Turatipus::create([
            'tipus_id' => 4,
            'turanev' => "Bakonybél_körút",
            'tajegyseg' => "Bakony",
            'nehezseg' => "középnehéz",
            'tavolsag' => "11",
            'szintkulonbseg' => "400",
            'kerekpar' => "0",
            'indulashelye' => "Bakonybél",
            'erkezeshelye' => "Bakonybél",
            'leiras' => "Bakonybél--Szarvad-árok--Odvaskő-barlang--Gerence-völgy--Tábor-hegy, Széchenyi-emlékkő--Bakonybél",
        ]);
        
        Turatipus::create([
            'tipus_id' => 5,
            'turanev' => "Dunakanyar-panoráma",
            'tajegyseg' => "Börzsöny",
            'nehezseg' => "középnehéz",
            'tavolsag' => "9",
            'szintkulonbseg' => "500",
            'kerekpar' => "0",
            'indulashelye' => "Nagymaros",
            'erkezeshelye' => "Zebegény",
            'leiras' => "Nagymaros--Rigó-hegy-Szent_mihály-hegy--Ördög-hegy--Dobozi-orom--Borosktyán-kő--Zebegény",
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turatipuses');
    }
};
