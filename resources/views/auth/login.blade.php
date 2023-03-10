<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" /><br>
    <p><h1 class="text-center fw-bolder fs-1 mb-3">CONNECTEZ-VOUS</h1></p>
    <section class="vh-80">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-5">
                      <ul class="techs fs-6 me-5">
                            <li>P</li>
                            <li>O</li>
                            <li>L</li>
                            <li>Y</li>
                            <li>M</li>
                            <li>A</li>
                            <li>T</li>
                            <li>R</li>
                            <li>I</li>
                            <li>X</li>
                            <li>.</li>
                            <li>.</li>
                            <li>.</li>
                        </ul>
                        <ul class="conferences">
                        </ul>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email:</label>
                            <input type="email" id="email"
                                class="form-control form-control-lg rounded @error('email') is-invalid @enderror"
                                 value="{{ old('email') }}" name="email"
                                placeholder="Enter a valid email address" />
                            @if ($errors->has('email'))
                                <span style="font-size: 15px;" class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password"
                                class="form-control form-control-lg rounded @error('password') is-invalid @enderror"
                                 value="{{ old('password') }}" name="password" placeholder="Enter password" />
                            @if ($errors->has('password'))
                                <span style="font-size: 15px;" class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input name="remember" class="form-check-input me-2" type="checkbox" value=""
                                    id="remember_me" />
                                <label class="form-check-label" for="remember_me">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-body">Mot de passe oublié?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-outline-primary btn-lg mb-3"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            {{-- <p class="small fw-bold mt-3 pt-1 mb-3 float-right">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>
