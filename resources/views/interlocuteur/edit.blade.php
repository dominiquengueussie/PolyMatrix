@extends('layouts.master')
@section('content')
    <div style="margin-top: 5rem;" class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div>
                    <div class="card border border-none shadow-lg">
                        <div class="card-header bg-success text-white fs-5"><i class="fa-solid fa-pen"></i>
                            {{ __('Modidfier une agence') }}</div>
                        <div style="background-color: #ebf3fb;" class="card-body text-center">
                            <div class="text-center">
                                @if (Session::get('fail'))
                                    <p class="alert alert-danger col-md-8 mt-2 container">{{ session::get('fail') }}</p>
                                @endif
                                @if (Session::get('success'))
                                    <p class="alert alert-info col-md-8 mt-2 container">{{ session::get('success') }}</p>
                                @endif
                            </div>
                            <form action="{{ route('interlocuteurs.update', $interlocuteur->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <div class="col-sm-12 mt-2">
                                        <label for="nom" class="form-label float-start">Nom(s)<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mb-2 border border-success" id="inputname"
                                            name="nom" placeholder="Nom" value="{{ $interlocuteur->nom }}">

                                        @if ($errors->has('nom'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('nom') }}</span>
                                        @endif 
                                        <label for="nom" class="form-label float-start">Email<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control mb-2 border border-success" id="inputname"
                                            name="email" placeholder="baba@gmail.com" value="{{ $interlocuteur->email }}">

                                        @if ($errors->has('email'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <label for="nom" class="form-label float-start">Téléphone<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mb-2 border border-success" id="inputname"
                                            name="telephone" placeholder="Nom" value="{{ $interlocuteur->telephone }}">

                                        @if ($errors->has('telephone'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('telephone') }}</span>
                                        @endif
                                        <label for="poste" class="form-label float-start">Poste<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mb-2 border border-success" id="poste"
                                            name="poste" placeholder="poste" value="{{ $interlocuteur->poste }}">

                                        @if ($errors->has('telephone'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('telephone') }}</span>
                                        @endif
                                        <div class="row mb-0 col-md-12 mx-auto">
                                            <div class="col-md-12 mx-auto">
                                                <button type="submit"
                                                    class="border border-success fw-bolder btn btn-success col-md-12">
                                                    {{ __('Modifier') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
