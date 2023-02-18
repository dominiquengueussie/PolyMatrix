<x-guest-layout>
    <div style="margin-top: 5rem;" class="mb-4 text-dark col-md-10 text-center mx-4">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="col-md-8 mx-4">
            <label for="email" :value="__('Email')">Email</label>
            <input id="email" class="form-control rounded" type="email" name="email" :value="old('email')" required autofocus />
        
        </div>

        <div class="mx-4 mt-4 mb-3 btn btn-success">
            <button type="submit">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>
