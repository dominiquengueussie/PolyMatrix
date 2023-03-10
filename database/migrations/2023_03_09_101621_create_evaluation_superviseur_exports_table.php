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
        Schema::create('evaluation_superviseur_exports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluation_superviseur_id')->constrained()->onDelete('cascade');
            $table->string('nom');
            $table->string('nom_manager'); //  debut de journée
            $table->integer('preparation');
            $table->integer('environnement_et_style');
            $table->integer('resultat_de_lapprentissage');
            $table->integer('point_sur_les_outils');
            $table->integer('note_debut_de_journee');
            $table->integer('discussion_de_coaching'); // fin debut de journée
            $table->integer('objectif_smart_client_par_visite'); // debut rencontre avec le client
            $table->integer('competences_cles_PWS');
            $table->integer('ventes_persuasive_PWS');
            $table->integer('visite_rdv_strutures');
            $table->integer('rôles_convenus');
            $table->integer('exemples');
            $table->integer('note_rencontre_client');
            $table->integer('Intervention_de_coaching_de_feedback'); // // fin rencontre avec le client
            $table->integer('discussion_de_coaching_fin_de_journée'); // debut fin de la journée
            $table->integer('note_fin_de_journee');
            $table->integer('documentation_et_revues'); // fin de fin de journée
            $table->string('resultat'); // document de coaching commercial début
            $table->string('tour_1');
            $table->string('tour_2');
            $table->string('conditions');
            $table->text('resume');
            //$table->integer('note_discussion_coaching_commercial');// document de coaching commercial fin
            $table->integer('note_totale');
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
        Schema::dropIfExists('evaluation_superviseur_exports');
    }
};