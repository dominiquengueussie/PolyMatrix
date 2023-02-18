<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-auto">
        <div class=" container ">
            <div class="p-4 bg-dark shadow-lg rounded-5">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div><br>

            <div class="p-4 bg-dark shadow-5 rounded-5">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div><br>

            <div class="p-4 bg-dark shadow-5 rounded-5">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
