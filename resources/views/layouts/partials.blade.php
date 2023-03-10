<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PolyMatrix') }}</title>
    <!-- Fonts -->
     <script src="https://kit.fontawesome.com/20b1dd7ac4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('font-awesome/kit.fontawesome.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrapwatch.min.css') }}">
    @livewireStyles()
</head>

<body class="hold-transition sidebar-mini">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <main>
            @yield('dashboard') 
        </main>
    </div>  
    <script src="{{ asset('js/jquery.min.js') }}"></script>
{{--     <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>--}} 
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
        <script>alert("Avant de naviguer, rassurez-vous d'activer le GPS sur votre appareil")</script>
</body>
</html>
