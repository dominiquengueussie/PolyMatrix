@extends('layouts.master')
@section('content')
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a title="Profile" class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fa-solid fa-user"></i></a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> --}}
                <span class="brand-text text-center mx-5 font-weight-light">PolyMatrix</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image text-light text-truncate">
                        <img src="{{ asset('images/avatar4.png') }}" class="img-circle elevation-2"
                            alt="User Image">&nbsp;{{ Auth::user()->nom }}
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-truncate"></a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tableau de bord
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a><br>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-stethoscope fs-5 me-2"></i> Gestion des clients
                                </button>
                                <ul class="dropdown-menu bg-primary">
                                    <li><a class="dropdown-item text-white fw-bolder" href="{{ route('clients.index') }}"><i
                                                class="fa-solid fa-user-doctor text-light fs-5 me-2"></i> Liste de
                                            clients</a></li>
                                    <li><a class="dropdown-item text-white fw-bolder"
                                            href="{{ route('category_client.index') }}"><i
                                                class="fs-5 fa-solid fa-gears text-light me-2"></i> Catégorie de clients</a>
                                    </li>
                                    <li><a class="dropdown-item text-light fw-bolder"
                                            href="{{ route('type_client.index') }}"><i
                                                class="fs-5 fa-solid fa-tag text-light me-2"></i> Type de clients</a></li>
                                </ul>
                            </div>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-users text-light"></i>&nbsp;
                                        <p>Utilisateurs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roles.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-layer-group text-light"></i>&nbsp;
                                        <p>Rôles</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('agence.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-house text-light"></i>&nbsp;
                                        <p>Agences</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('clients.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-user-doctor text-light"></i></i>&nbsp;
                                        <p>Clients</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('type_client.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-tag text-light"></i>&nbsp;
                                        <p>Type de client</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('category_client.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-gears text-light"></i>&nbsp;
                                        <p>Catégorie client</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fs-5">
                                        <i class="fa-sharp fa-solid fa-chart-column text-light"></i>&nbsp;
                                        <p>Mes performances</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fs-5">
                                        <i class="fa-solid fa-business-time text-light"></i></i>&nbsp;
                                        <p>Mes activités</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fs-5">
                                        <i class="fa-solid fa-calendar-days text-light"></i></i>&nbsp;
                                        <p>Mes objectifs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('interlocuteurs.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-handshake text-light"></i>&nbsp;
                                        <p>Interlocuteur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('zone_commerciale.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-location-dot text-light"></i>&nbsp;
                                        <p>Zone commerciale</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fs-5">
                                        <i class="fa-solid fa-pen text-light"></i>&nbsp;
                                        <p>Evaluation commercial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link fs-5">
                                        <i class="fa-solid fa-user-pen text-light"></i>&nbsp;
                                        <p>Evaluation superviseur</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>

            </div>
        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Profil du client</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dasboard</a></li>
                                <li class="breadcrumb-item active"> <a href="{{ route('clients.index') }}">
                                        Clients</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-5">
                <div class="row justify-content-center">

                    <div class="col-md-12">
                        <div>
                            <div class="card border border-none shadow-lg">
                                <div class="card-header bg-success text-white fs-5"><i
                                        class="fa-solid fa-user-doctor"></i>
                                    {{ __('Profile du client') }}</div>
                                <div style="background-color: #ebf3fb;" class="card-body text-center">

                                    <div class="row d-flex">
                                        <section style="background-color: #eee;">
                                            <div class="container py-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                                            <ol class="breadcrumb mb-0">
                                                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">dashboard</a>
                                                                </li>
                                                                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">clients</a>
                                                                </li>
                                                                <li class="breadcrumb-item active" aria-current="page">
                                                                    Profil client</li>
                                                            </ol>
                                                        </nav>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card mb-4 bg-success">
                                                            <div class="card-body text-center">
                                                                <img src="{{ asset('images/avatar.png') }}"
                                                                    alt="avatar" class="rounded-circle img-fluid"
                                                                    style="width: 200px;">
                                                                <h5 class="my-5 mb-1 fw-bolder text-light fs-3">{{ $client->designation }}</h5>
                                                                <p class="text-light mb-0 fs-5"><i class="fa-solid fa-location-dot text-secondary fs-5"></i> {{ $client->ville }}, {{ $client->pays }}</p>
                                                                <p class="text-muted mb-4"></p>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card mb-4">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Agence:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->agence->nom }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Zone commerciale:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->zone_commerciale->nom }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Quartier:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->quartier }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Typologie:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->typologie }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Réseau:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->reseau }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Statut:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->statut }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Catégorie:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->categorie->nom }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Type:</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $client->type_client->nom }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3 text-center fs-4">
                <x-dropdown-link class="text-center fs-4" :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                            class="fa-solid fa-right-from-bracket"></i> Déconnexion
                    </a>
                </form>
            </div>
        </aside>
        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Ensemble, nous pouvons.
            </div>

            <strong>Copyright &copy; 2022-2023 <a href="{{ route('dashboard') }}">PolyMatrix</a>.</strong> Tous droits
            révervés.

        </footer>
    </div>
@endsection
