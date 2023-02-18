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
                            </a>
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
                            <h1 class="m-0">Zones commerciales</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dasboard</a></li>
                                <li class="breadcrumb-item active"> <a href="{{ route('zone_commerciale.index') }}">Zone commerciale</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                @livewire('zone-commerciale-list')
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
