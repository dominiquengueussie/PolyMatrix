@extends('layouts.master')
@section('content')
    <div class="wrapper">

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Retour</a></li>
                <li class="breadcrumb-item active" aria-current="page">MAP</li>
            </ol>
        </nav>

        <div class="bg-secondary">
            <div class="card">
                <div class="card-header bg-success text-light fs-2">
                    identifier la position d'un client sur le map par cette icône<i
                        class=" fa-solid fa-location-dot text-danger fs-3 mx-2"></i></div>
            </div>
            <div class="card-body fw-bolder">
                <p class="text-dark mx-5"> Nom du client:
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ $geo->designation }}</span></p>
            </div>
            <div class="card-footer h-500">
            </div>
            <div style="height: 30rem;">
                <iframe style="width: 100%; height:100%;"
                    src="https://www.google.com/maps?q={{ $geo->latitude }},{{ $geo->longitude }}&hl=es;z=14&output=embed"
                    frameborder="0">
                </iframe>
            </div>
        </div>

    </div>
@endsection
