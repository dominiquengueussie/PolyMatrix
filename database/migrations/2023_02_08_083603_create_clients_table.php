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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('pays');
            $table->string('ville');
            $table->string('quartier');
            $table->string('typologie');
            $table->string('reseau');
            $table->string('statut');
            $table->string('longitude');
            $table->string('latitude');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('agence_id')->constrained()->onDelete('cascade');
            $table->foreignId('zone_commerciale_id')->constrained()->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_client_id')->constrained()->onDelete('cascade');          
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
        Schema::dropIfExists(['user_id','agence_id','zone_commerciale_id','categorie_id','type_client_id']);
    }
};
