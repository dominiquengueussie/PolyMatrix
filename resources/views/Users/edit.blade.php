@extends('layouts.master')
@section('content')
    <div style="margin-top: 5rem;" class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-6">
                <div>
                    <div class="card border border-none shadow-lg">
                        <div class="card-header bg-success text-white fs-5"><i class="fa-solid fa-pen"></i>
                            {{ __('Modidfier un utilisateur') }}</div>
                        <div style="background-color: #ebf3fb;" class="card-body text-center">
                            <div class="text-center">
                                @if (Session::get('fail'))
                                    <p class="alert alert-danger col-md-8 mt-2 container">{{ session::get('fail') }}</p>
                                @endif
                                @if (Session::get('success'))
                                    <p class="alert alert-info col-md-8 mt-2 container">{{ session::get('success') }}</p>
                                @endif
                            </div>
                            <form action="{{ route('users.update', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <div class="col-sm-12 mt-5">
                                        <input type="text" class="form-control mb-2 border border-success" id="inputname"
                                            name="nom" placeholder="Nom" value="{{ $user->nom }}">

                                        @if ($errors->has('nom'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('nom') }}</span>
                                        @endif
                                        <br>
                                        <input type="text" class="form-control mb-2 border border-success" id="inputname"
                                            name="email" placeholder="Email" value="{{ $user->email }}">

                                        @if ($errors->has('email'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <br>
                                        <input type="text" class="form-control mb-2 border border-success" id="inputname"
                                            name="poste" placeholder="Poste" value="{{ $user->poste }}">

                                        @if ($errors->has('poste'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('poste') }}</span>
                                        @endif
                                        <br>
                                        <input type="text" class="form-control mb-2 border border-success" id="inputname"
                                            name="telephone" placeholder="telephone" value="{{ $user->telephone }}">

                                        @if ($errors->has('telephone'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('telephone') }}</span>
                                        @endif
                                        <br>
                                        <select name="agence" class="border border-success form-select">
                                            @foreach ($agences as $agence)
                                                <option value="{{ $agence->id }}">
                                                    {{ $agence->nom }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('agence'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('agence') }}</span>
                                        @endif
                                        <br>
                                        <select name="role" class="border border-success form-select">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->nom }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('role'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('role') }}</span>
                                        @endif
                                        <br>
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
