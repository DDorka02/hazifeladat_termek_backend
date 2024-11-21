<?php

use App\Models\Termek;
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
        Schema::create('termeks', function (Blueprint $table) {
            $table->id();
            $table->string('iro');
            $table->string('cime');
            $table->string('leiras');
            $table->integer('ar');
            $table->smallInteger('db')->default(1);
            $table->timestamps();
        });

        Termek::create([
            'iro'=>'Soman Chainani',
            'cime'=>'Jók és rosszak iskolája',
            'leiras'=>"Ősidőknek erdejében Két kastély áll, fej fej mellett; Egy a Jónak, egy Gonosznak, Együtt, de mind mást tanulnak. Menekülnél, de nem lehet, Kifelé csak mese vezet.",
            'ar'=>5215,
        ]);
        Termek::create([
            'iro'=>'Leiner Laura',
            'cime'=>'Mindig karácsony',
            'leiras'=>'Anna, Luca és Bogi történetét meséli el, akiknek látszólag semmi közük egymáshoz, sorsukat mégis ezernyi láthatatlan szál köti össze karácsonykor.',
            'ar'=>2774,
        ]);
        Termek::create([
            'iro'=>'Kiera Cass',
            'cime'=>'A párválasztó',
            'leiras'=>'Harmincöt lány. Egy korona. Egy lehetőség, ami az életben csak egyszer adódik.',
            'ar'=>3695,
        ]);
        Termek::create([
            'iro'=>'Antoine De Saint-Exupéry',
            'cime'=>'A kis herceg',
            'leiras'=>'A sivatagban rekedt pilóta és a távoli bolygóról érkezett kisfiú találkozása egyike a világirodalom legismertebb történeteinek. A kis herceg töretlen népszerűsége persze nem meglepő. ',
            'ar'=>1899,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termeks');
    }
};
