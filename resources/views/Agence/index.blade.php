@extends('layouts.master')
@section('content')
    {{--  <main class="container mt-5">
        <div>
            <h3 class="text-start text-decoration-underline fw-bolder mt-5">Agence disponible</h3>

            <div class="container  mt-5 mb-0">
                <div class="col-md-12 d-flex justify-content-around align-items-center">
                    <div class="float-start ">
                        <div class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            title="Créer une agence" class="">
                            <i class="fa-solid fa-circle-plus"></i> Créer
                        </div>
                    </div>

                    <div class="d-flex ms-5 align-items-center">
                        <input size="25" class="form-control rounded-3" type="search" name="search" id="search"
                            placeholder="Exple: Douala">&nbsp;
                        <a href="" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" title="Refresh page">
                                    <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </div>
               
                    <div class="table-responsive mt-1 table-responsive-sm table-responsive-md col-md-9 container">
                        <table class="table table-hover border text-center">
                            <thead class="bg-success text-light">
                                <th>ID</th>
                                <th>Nom</th>
                                <th width="280px">Action</th>
                            </thead>
                            @foreach ($agences as $agence)
                                <tr>
                                    <td>{{ $agence->id }}</td>
                                    <td>{{ $agence->nom }}</td>
                                    <td>
                                        <form action="{{ route('agence.destroy', $agence->id) }}" method="POST">
                                            <a title="Modifier rôle" class=""
                                                href="{{ route('agence.edit', $agence->id) }}"><i
                                                    class="fa-solid fa-pen-to-square text-dark fs-6 mx-3"></i></a>

                                            @csrf
                                            @method('DELETE')

                                            <button onclick="return confirm('Etes-vous sûr de vouloir supprimer?')"
                                                title="Supprimer rôle" type="submit" class="border-0"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $agences->links() }}
                        </table>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Créer une agence ici</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container mt-5">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="card border border-none shadow-lg">
                                                    <div class="card-header bg-success text-white fs-5">
                                                        <i class="fa-solid fa-circle-plus"></i>
                                                        {{ __('Ajouter une agence ici') }}
                                                    </div>
                                                    <div style="background-color: #ebf3fb;" class="card-body text-center">
                                                        <form class="mt-5" method="POST"
                                                            action="{{ route('agence.store') }}">
                                                            @csrf
                                                            <div class="row mb-3">
                                                                <label for="nom"
                                                                    class="col-md-4 col-form-label text-md-end fw-bolder">{{ __('Nom:') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="nom" type="nom"
                                                                        class="form-control border-success @error('nom') is-invalid @enderror"
                                                                        name="nom" value="{{ old('nom') }}"
                                                                        autocomplete="nom" autofocus>

                                                                    @if ($errors->has('nom'))
                                                                        <span style="font-size: 15px;"
                                                                            class="text-danger">{{ $errors->first('nom') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                    </div><br>
                                                    <div class="mb-2 mx-auto">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">Sauvegarder</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main> --}}

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
                                    <a href="#" class="nav-link fs-5">
                                            <i class="fa-sharp fa-solid fa-file-pdf text-light"></i>&nbsp;
                                        <p>Fiches produits</p>
                                    </a>
                                </li>
                              {{--   <li class="nav-item">
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
                                </li> --}}
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
                            <h1 class="m-0">Liste des Agences disponible</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dasboard</a></li>
                                <li class="breadcrumb-item active"> <a href="{{ route('agence.index') }}">Agence</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                @livewire('agence-list')
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
