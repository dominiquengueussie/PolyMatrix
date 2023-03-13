<?php

namespace App\Exports;

use App\Models\EvaluationCommercial;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class EvaluationCommercialExport implements FromCollection, WithHeadings,WithStrictNullComparison
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EvaluationCommercial::all();
    }
    public function headings(): array
    {
        return [
            "id",
            "nom de l'évaluer",
            'nom du superviseur',
            'agence',
            'objectif smart',
            "tactique d'éxécution",
            "suivi des engagements",
            'nprésentation de vente',
            'outil de vente',
            'Journée plan',
            'Note de planing et préparation',
            'qualité',
            'distribution',
            'visibilité',
            'prices',
            'promotion',
            'persuasion',
            'Note des vecteurs de vente',
            'Apres le check des vecteurs de vente, votre objectif reste til valide?',
            'Avez vous trouve une quelconque raison de rendre votre ancien objectif invalide?',
            "Ya til une probleme plus pressant à resoudre chez le client par rapport à l'objectif initial?",
            'Faut il ajuster votre proposition initiale?',
            "Ya t-il d'autres problemes soulevés par le client qui nécessite d'etre resolu ce jour?",
            'Note de revue des objectifs ',
            'La Presentation est elle persuasive ',
            'Utilise ton les 06 Outils pour assister durant  la Presentation',
            'STYLO',
            'DISCOURS COMMERCIAL',
            'CATOLOGUE DE PRESENTATION DES PRODUITS',
            'LES ECHANTILLONS',
            'FICHE DES OBJECTIFS',
            'FICHE DE VISITE COMMERCIALE',
            "A ton identifié les besoins du clients , surmonté les objections client et identifié les signes d'achat",
            'Note de présentation',
            'réaliste:Une bonne plannification conduit à une proposition realiste.',
            'juste à temps:La vente a telle conclue juste à temps?',
            'positive:: Sommes nous confiant et enthousiaste ?',
            'Note de conclusion',
            'simple',
            'siting:Tous les vecteurs à activer ont ils identifiés?',
            "impact:L'activation attire elle l'attention?",
            'message:Le Message est il clair au consommateur?',
            "price:L'activation est elle valorisée?",
            'live:Cela va telle tenir longtemps?',
            'ensure safety: La Securité est elle assurée et garantie ?',
            'Note activation des vecteurs de vente',
            'Confirmer les Actions à Suivre avec le Client',
            "Finaliser le remplissage de la fiche de l'auto evaluation",
            "Confirmer le score d'auto evaluation",
            "Note administration",
            "L'objectif de la visite a til été atteint?",
            "Si non ,quelle est la lecon tirée?",
            "Si oui ,quelle est la lecon tirée?",
            "Comment utiliser ces lecons à la prochaine visite?",
            "Que feriez vous differemment la prochaine fois?",
            "Note évaluation",
            "point fort",
            "point fort à améliorer",
            "commentaire global",
        ];
    }

    public function map($row): array
    {

        return [
            
            $row->nom_commercial,
            $row->nom_superviseur,
            $row->agence,
            $row->objectif_smart,
            $row->tactique_execution,
            $row->suivi_des_engagements,
            $row->presentation_de_vente,
            $row->outil_de_vente,
            $row->journee_plan,
            $row->note_planing_et_preparation,
            $row->qualite,
            $row->distribution,
            $row->visibilité,
            $row->prices,
            $row->promotion,
            $row->persuasion,
            $row->note_vecteur_de_vente,
            $row->revue1,
            $row->revue2,
            $row->revue3,
            $row->revue4,
            $row->revue5,
            $row->note_revue_des_objectifs,
            $row->presentation1,
            $row->presentation2,
            $row->presentation3,
            $row->presentation4,
            $row->presentation5,
            $row->presentation6,
            $row->presentation7,
            $row->presentation9,
            $row->note_presentation,
            $row->realiste,
            $row->juste_a_temps,
            $row->positive,
            $row->note_conclusion,
            $row->simple,
            $row->siting,
            $row->impact,
            $row->message,
            $row->price,
            $row->life,
            $row->ensure_safety,
            $row->note_activation,
            $row->administration1,
            $row->administration2,
            $row->administration3,
            $row->note_administration,
            $row->evaluation1,
            $row->evaluation2,
            $row->evaluation3,
            $row->evaluation4,
            $row->evaluation5,
            $row->note_evaluation,
            $row->point_fort,
            $row->point_fort_a_ameliorer,
            $row->commentaire_global,
          
        ];
    }
}