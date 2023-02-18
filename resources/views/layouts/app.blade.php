<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PolyMatrix') }}</title>
    <!-- Fonts -->
    <link rel="short icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrapwatch.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    {{--     <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
 --}}
    <script src="{{ asset('font-awesome/kit.fontawesome.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}">
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <!-- Scripts -->
    @livewireStyles()
</head>

<body class="hold-transition sidebar-mini">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <main>
            {{ $slot }}
        </main>
    </div>



    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('warning') }}");
        @endif
    </script>
    @livewireScripts()
</body>

</html>
