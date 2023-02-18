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
    <link rel="stylesheet" href="{{ asset('css/bootstrapwatch.min.css') }}">
    @livewireStyles()
    <title>PolyMatrix</title>
</head>

<body onload="getLocation();">
    <div id="app">
        <main class="py-0">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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

    <script></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    @livewireScripts()

    <script type="text/javascript">
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            }
        }

        function showPosition(position) {
            document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("Veuillez activer votre GPS pour utiliser l'application");
                    location.reload();
                    break;
            }
        }
    </script>
</body>

</html>
