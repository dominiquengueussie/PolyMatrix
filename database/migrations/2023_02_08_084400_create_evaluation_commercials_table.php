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
        Schema::create('evaluation_commercials', function (Blueprint $table) {
            $table->id();
            $table->string('nom_commercial');
            $table->string('agance');
            //planing et preparation
            $table->integer("objectif_smart");
            $table->integer("tactique_execution");
            $table->integer("suivi_des_engagements");
            $table->integer("presentation_de_vente");
            $table->integer("outil_de_vente");
            $table->integer("journee_plan");
            $table->integer("note_planing_et_preparation"); //note planing et préparation
            // CHECK DES VECTEURS DE VENTE
            $table->integer("qualite");
            $table->integer("distribution");
            $table->integer("visibilité");
            $table->integer("promotion");
            $table->integer("persuasion");
            $table->integer("note_vecteur_de_vente");
            //REVUE DES OBJECTIFS
            $table->integer("revue1");
            $table->integer("revue2");
            $table->integer("revue3");
            $table->integer("revue4");
            $table->integer("revue5");
            $table->integer("note_revue_des_objectifs");
            //PRESENTATION
            $table->integer("presentation1");
            $table->integer("presentation2");
            $table->integer("presentation3");
            $table->integer("presentation4");
            $table->integer("presentation5");
            $table->integer("presentation6");
            $table->integer("presentation7");
            $table->integer("presentation8");
            $table->integer("presentation9");
            $table->integer("note_presentation");
            //CONCLUSION
            $table->integer("realiste");
            $table->integer("juste_a_temps");
            $table->integer("positive");
            $table->integer("note_conclusion");
            //ACTIVATION DES VECTEURS DE VENTE
            $table->integer("simple");
            $table->integer("siting");
            $table->integer("impact");
            $table->integer("message");
            $table->integer("price");
            $table->integer("life");
            $table->integer("ensure_safety");
            $table->integer("note_activation");
            //ADMINISTRATION
            $table->integer("administration1");
            $table->integer("administration2");
            $table->integer("administration3");
            $table->integer("administration4");
            $table->integer("note_administration");
            //EVALUATION
            $table->integer("evaluation1");
            $table->integer("evaluation2");
            $table->integer("evaluation3");
            $table->integer("evaluation4");
            $table->integer("evaluation5");
            $table->integer("note_evaluation");
            $table->string("point_fort");
            $table->string("point_fort_a_ameliorer");
            $table->string("commentaitaire_global");
            $table->string("signature_commercial");
            $table->string("signature_superviseur");
            $table->string("signature_ASM");
            

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
        Schema::dropIfExists('evaluation_commercials');
    }
};