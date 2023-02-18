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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string('nom commercial');
            $table->string('poste commercial');
            $table->date('date');
            $table->string('heure_debut');
            $table->string('heure_fin');
            $table->string('check');
            $table->string('activite');
            $table->string('presentation');
            $table->string('duree');
            $table->string('activation(photo)');
            $table->string('raison sociale');
            $table->string('poste interlocuteur');
            $table->string('signature interlocuteur');
            $table->string('email interlocuteur');
            $table->string('telephone interlocuteur');
            $table->string('signature commercial');
            $table->string('besoin(SAV)');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('conclusion');
            $table->string('objectif_id')->constrained()->onDelete('cascade');
            $table->foreignId('interlocuteur_id')->constrained()->onDelete('cascade');
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_client_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->id();
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
        Schema::dropIfExists(['objectif_id','interlocuteur_id','client_id','type_client_id','user_id','categorie_id']);
    }
};
