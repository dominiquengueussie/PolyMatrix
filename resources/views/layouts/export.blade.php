<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="short icon" href="{{ asset('images/logo.png') }}">
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
    <title>PolyMatrix</title>
</head>

<body style="background-color: #dee9e0" onload="document.getElementById('export-form').submit();">
    <form id="export-form" method="POST" action="{{ route('exportExcel') }}">
        @csrf
    </form>
    <div id="app">
        <main class="py-0">
            @yield('export')
        </main>
    </div>
    @livewireScripts()
</body>

</html>
