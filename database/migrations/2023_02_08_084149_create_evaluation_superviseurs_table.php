<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_superviseurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nom superviseur'); //  debut de journée
            $table->integer('préparation');
            $table->integer('environnement et style');
            $table->integer('résultat de lapprentissage');
            $table->integer('point sur les outils');
            $table->integer('note début de journée');
            $table->integer('discussion de coaching');// fin debut de journée
            $table->integer('objectif smart client par visite');// debut rencontre avec le client
            $table->integer('compétences clés DWS');
            $table->integer('ventes perçoisive DWS');
            $table->integer('visite/rdv struturés');
            $table->integer('rôles convenus');
            $table->integer('Exemples');
            $table->integer('note rencontre client');
            $table->integer('Intervention de coaching/de feedback');// // fin rencontre avec le client
            $table->integer('discussion de coaching');// debut fin de la journée
            $table->integer('note fin de journée');
            $table->integer('documentation et revues');// fin de fin de journée
            $table->string('résultat');// document de coaching commercial début
            $table->string('tour 1');
            $table->string('tour 2');
            $table->text('résumé');
            $table->integer('note discussion coaching commercial');// document de coaching commercial fin
            $table->integer('note totale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_id');
    }
};
