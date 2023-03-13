@extends('layouts.export')
@section('export')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('statistique') }}">Statistique du superviseur</a></li>
            <li class="breadcrumb-item active" aria-current="page">Exporter</li>
        </ol>
    </nav>
    <div style="margin-top: 5rem;" class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div>
                    <div class="card border border-none shadow-lg">
                        <div class="card-header bg-success text-white fs-3"><i
                                class="fa-sharp fa-regular fa-file-excel"></i>
                            {{ __('Exporter votre fichier au format excel.') }}</div>
                        <div style="background-color: #ebf3fb;" class="card-body text-center">
                            <div class="text-center fw-bolder fs-3">
                                Exporter les données.
                            </div>
                            <span>Les fichiers seront exporté au format .Xls, .Xlsx</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
