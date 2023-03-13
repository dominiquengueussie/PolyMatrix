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

<body style="background-color: #dee9e0" onload="getLocation();">
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }

        #sig1 canvas {
            width: 100% !important;
            height: auto;
        }
    </style>
    <div id="app">
        <main class="py-0">
            @yield('content')
        </main>
    </div>

    {{-- <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/signature.js') }}"></script>
    <script type="text/javascript">
        var sig1 = $('#sig1').signature({
            syncField: '#signature1',
            syncFormat: 'PNG'
        });
        $('#clear1').click(function(e) {
            e.preventDefault();
            sig1.signature('clear');
            $("#signature1").val('');
        });

        var sig2 = $('#sig2').signature({
            syncField: '#signature2',
            syncFormat: 'PNG'
        });
        $('#clear2').click(function(e) {
            e.preventDefault();
            sig2.signature('clear');
            $("#signature2").val('');
        });

        var sig3 = $('#sig3').signature({
            syncField: '#signature3',
            syncFormat: 'PNG'
        });
        $('#clear3').click(function(e) {
            e.preventDefault();
            sig3.signature('clear');
            $("#signature3").val('');
        });
    </script>
</body>

</html>
