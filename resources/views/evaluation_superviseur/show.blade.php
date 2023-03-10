@extends('layouts.master')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('evaluations_superviseurs.index')}}">Evaluations superviseurs</a></li>
    <li class="breadcrumb-item active" aria-current="page">Statistiques des superviseurs</li>
    <li class="breadcrumb-item" aria-current="page"><a class="" href="{{ route('export') }}"><i class="fa-solid fa-arrow-up-long fw-bolder"></i> Exporter</a></li>
  </ol>
</nav>


    <div class="mt-5">
        <table class="table table-hover table-striped table-bordered border border-3 text-center">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom superviseur</th>
                    <th scope="col">Manager</th>
                    <th scope="col">Préparation</th>
                    <th scope="col">Environnement et style</th>
                    <th scope="col">Résultat de l'apprentissage</th>
                    <th scope="col">Point sur les outils</th>
                    <th scope="col">Discussion de coaching début de journée</th>
                    <th scope="col">Note début de journée</th>
                    <th scope="col">Objectifs smart/client par visite</th>
                    <th scope="col">Compétences clés DWS</th>
                    <th scope="col">Ventes persuasive DWS</th>
                    <th scope="col">Visite/rdv structuré</th>
                    <th scope="col">Rôles convenus</th>
                    <th scope="col">Exemples</th>
                    <th scope="col">Intervention de coaching/de feedback</th>
                    <th scope="col">Note de rencontre avec le client</th>
                    <th scope="col">Discussion de coaching</th>
                    <th scope="col">Documentation et revues</th>
                    <th scope="col">Note de fin de journée</th>
                    <th scope="col">Résultats</th>
                    <th scope="col">Tour 1</th>
                    <th scope="col">Tour 2</th>
                    <th scope="col">Condition</th>
                    <th scope="col">Résumé</th>
                    <th scope="col">NOTE TOTALE</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluations as $evaluation)
                    <tr>
                        <th scope="row">{{ $evaluation->id }}</th>
                        <td>{{ $evaluation->name_user}}</td>
                        <td> {{ $evaluation->nom_manager }} </td>
                        <td> {{ $evaluation->preparation }} </td>
                        <td> {{ $evaluation->environnement_et_style }} </td>
                        <td> {{ $evaluation->resultat_de_lapprentissage }} </td>
                        <td> {{ $evaluation->point_sur_les_outils }} </td>
                        <td> {{ $evaluation->discussion_de_coaching }} </td>
                        <td class="fw-bolder text-light bg-success"> {{ $evaluation->note_debut_de_journee . '%' }} </td>
                        <td class=""> {{ $evaluation->objectif_smart_client_par_visite }} </td>
                        <td class=""> {{ $evaluation->competences_cles_PWS }} </td>
                        <td class=""> {{ $evaluation->ventes_persuasive_PWS }} </td>
                        <td class=""> {{ $evaluation->visite_rdv_strutures }} </td>
                        <td class=""> {{ $evaluation->rôles_convenus }} </td>
                        <td class=""> {{ $evaluation->exemples }} </td>
                        <td class=""> {{ $evaluation->Intervention_de_coaching_de_feedback }} </td>
                        <td class="fw-bolder text-light bg-warning"> {{ $evaluation->note_rencontre_client . '%' }} </td>
                        <td class=""> {{ $evaluation->discussion_de_coaching_fin_de_journée }} </td>
                        <td class=""> {{ $evaluation->documentation_et_revues }} </td>
                        <td class="fw-bolder text-light bg-primary"> {{ $evaluation->note_fin_de_journee . '%' }} </td>
                        <td class=""> {{ $evaluation->resultat }} </td>
                        <td class=""> {{ $evaluation->tour_1 }} </td>
                        <td class=""> {{ $evaluation->tour_2 }} </td>
                        <td class=""> {{ $evaluation->conditions }} </td>
                        <td class=""> {{ $evaluation->resume }} </td>
                        <td class="bg-danger fw-bolder text-light"> {{ $evaluation->note_totale . '%' }} </td>
                        <td>
                            <form action="{{ route('evaluations_superviseurs.destroy', $evaluation->id) }}" method="POST">
                              {{--   <a title="Modifier évaluation" class=""
                                    href="{{ route('evaluations_superviseurs.edit', $evaluation->id) }}">
                                    <i class="fa-regular fa-pen-to-square text-dark text-decoration-none"></i></a> --}}
    
                                @csrf
                                @method('DELETE')
    
                                <button onclick="return confirm('Etes-vous sûr de vouloir supprimer?')"
                                    title="Supprimer evaluation" type="submit" class="border-0">
                                    <i class="fa-solid fa-trash-can text-dark"></i>
                                </button>
                            </form>
                        </td>
    
    
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection