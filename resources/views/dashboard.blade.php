@extends('layouts.partials')
@section('dashboard')
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

            <a href="{{ route('dashboard') }}" class="brand-link">
                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> --}}
                <span class="brand-text text-center mx-5 font-weight-light">PolyMatrix</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/avatar4.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-truncate">{{ Auth::user()->nom }}</a>
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
                                        <i class="fa-solid fa-layer-group text-light"></i></i>&nbsp;
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
                                    <a href="" class="nav-link fs-5">
                                        <i class="fa-sharp fa-solid fa-file-pdf text-light"></i>&nbsp;
                                        <p>Fiches produits</p>
                                    </a>
                                </li>
                            {{--     <li class="nav-item">
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
                                    <a href="{{ route('evaluations_commercials.index') }}" class="nav-link fs-5">
                                        <i class="fa-solid fa-pen text-light"></i>&nbsp;
                                        <p>Evaluation commercial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('evaluations_superviseurs.index') }}" class="nav-link fs-5">
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
                            <h1 class="m-0">Tableau de bord</h1>
                        </div>
                        {{--   <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-4">

                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>
                                            <p>Clients</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa-solid fa-users-gear fs-1 text-secondary"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More infos<i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-4">

                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px"></sup></h3>
                                            <p>Utilisateurs</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa-sharp fa-solid fa-people fs-1"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-4">

                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>44</h3>
                                            <p>Catégories clients</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-4">

                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>
                                            <p>Agences</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-4">

                                    <div class="small-box bg-secondary">
                                        <div class="inner">
                                            <h3>65</h3>
                                            <p>Objectifs</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-4">

                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3>65</h3>
                                            <p>Type de clients</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                            {{--  <div class="">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Responsive Hover Table</h3>
                                            <div class="card-tools">
                                                <div class="input-group input-group-sm" style="width: 150px;">
                                                    <input type="text" name="table_search"
                                                        class="form-control float-right" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>User</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Reason</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>183</td>
                                                        <td>John Doe</td>
                                                        <td>11-7-2014</td>
                                                        <td><span class="tag tag-success">Approved</span></td>
                                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank
                                                            fatback doner.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>219</td>
                                                        <td>Alexander Pierce</td>
                                                        <td>11-7-2014</td>
                                                        <td><span class="tag tag-warning">Pending</span></td>
                                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank
                                                            fatback doner.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>657</td>
                                                        <td>Bob Doe</td>
                                                        <td>11-7-2014</td>
                                                        <td><span class="tag tag-primary">Approved</span></td>
                                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank
                                                            fatback doner.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>175</td>
                                                        <td>Mike Doe</td>
                                                        <td>11-7-2014</td>
                                                        <td><span class="tag tag-danger">Denied</span></td>
                                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank
                                                            fatback doner.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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
