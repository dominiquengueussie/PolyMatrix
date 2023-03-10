<x-guest-layout>
    <div style="visibility:hidden" class="d-grid gap-2 col-10 mx-auto">
        @if (Session::get('fail'))
            <p class="alert alert-danger col-md-8 mt-2 container">{{ session::get('fail') }}</p>
        @endif
        @if (Session::get('success'))
            <p class="alert alert-info col-md-8 mt-2 container">{{ session::get('success') }}</p>
        @endif
    </div>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="nom" :value="__('Name')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required
                autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div><br>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div><br>
        <!-- agence -->
        <div>
            <x-input-label for="agence" :value="__('Agence')" />
            {{-- <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')"
                    required autofocus /> --}}
    {{-- <x-input-error :messages="$errors->get('nom')" class="mt-2" /> 
            <select class="w-full block sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-600 shadow-md overflow-hidden sm:rounded-lg" name="agence" id="" :value="old('agence')">
                @foreach ($agences as $agence)     
                <option class="w-full block sm:max-w-md mt-6" value="{{ $agence->id }}">
                    {{ $agence->nom }}
                </option>
                @endforeach
            </select>
        </div><br>
        <!-- poste -->
        <div>
            <x-input-label for="poste" :value="__('Poste')" />
            <x-text-input id="poste" class="block mt-1 w-full" type="text" name="poste" :value="old('poste')"
                required autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div><br>
        <!-- téléphone -->
        <div>
            <x-input-label for="phone" :value="__('Téléphone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                required autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div><br>
        <!-- adresse -->
        <div>
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')"
                required autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

         Confirm Password
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-12 mb-5 mb-lg-0 shadow-sm">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form method="POST" action="{{ route('register') }}">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="nom">Nom</label>
                                                <input placeholder="nom" value="{{ old('nom') }}" id="nom"
                                                    name="nom" type="text"
                                                    class="form-control border border-success rounded @error('nom') is-invalid @enderror" />
                                                @if ($errors->has('nom'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('nom') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="email">Email</label>
                                                <input placeholder="email" value="{{ old('email') }}" type="email"
                                                    name="email" id="email"
                                                    class="form-control border border-success rounded @error('email') is-invalid @enderror" />
                                                @if ($errors->has('email'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="poste">Poste</label>
                                                <input placeholder="poste" value="{{ old('poste') }}" id="poste"
                                                    name="poste" type="text"
                                                    class="form-control border border-success rounded @error('poste') is-invalid @enderror" />
                                                @if ($errors->has('poste'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('poste') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-0 mt-0">
                                            <div class="form-outline">
                                                <label class="agence mb-2" for="agence">Agence</label>
                                                <select name="agence" id="agence"
                                                    class="rounded border border-success form-select">
                                                    @foreach ($agences as $agence)                               
                                                    <option value="{{ $agence->id }}" {{ old('agence') == $agence->nom ? 'selected' : '' }}>
                                                        {{ $agence->nom }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('agence'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('agence') }} <a class="fw-bolder" href="{{ route('agence.index') }}">créer</a></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <label class="form-label" for="telephone">Téléphone</label>
                                                <input placeholder="téléphone" value="{{ old('phone') }}" id="telephone"
                                                    name="phone" type="text"
                                                    class="form-control border border-success rounded @error('phone') is-invalid @enderror" />
                                                @if ($errors->has('phone'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-0 mt-0">
                                            <div class="form-outline">
                                                <label class="agence mb-2" for="agence">Rôle</label>
                                                <select name="role" id="role"
                                                    class="rounded border border-success form-select">
                                                    @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" {{ old('role') == $role->nom ? 'selected' : '' }}>
                                                        {{ $role->nom }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('role'))
                                                    <span style="font-size: 15px;"
                                                        class="text-danger">{{ $errors->first('role') }}<a class="fw-bolder" href="{{ route('roles.index') }}">créer</a></span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="adresse">Adresse</label>
                                        <input placeholder="adresse" name="adresse" value="{{ old('adresse') }}"
                                            type="text" id="adresse"
                                            class="form-control border border-success @error('adresse') is-invalid @enderror" />
                                        @if ($errors->has('adresse'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('adresse') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="adresse">Mot de passe</label>
                                        <input placeholder="password" name="password" value="{{ old('password') }}"
                                            type="password" id="password"
                                            class="form-control border border-success @error('password') is-invalid @enderror" />
                                        @if ($errors->has('password'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password_confirmation">Confirmer mot de passe</label>
                                        <input placeholder="confirmer mot de passe" name="password_confirmation" value="{{ old('password_confirmation') }}"
                                            type="password" id="password_confirmation"
                                            class="form-control border border-success @error('password_confirmation') is-invalid @enderror" />
                                        @if ($errors->has('password_confirmation'))
                                            <span style="font-size: 15px;"
                                                class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-outline-primary btn-block mb-4">
                                        Créer
                                    </button>
                                    <a class="text-primary float-end"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</x-guest-layout>
