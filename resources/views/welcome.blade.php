<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link rel="short icon" href="{{ asset('images/logo.png') }}">
    <title>PolyMatrix</title>
    <script type="text/javascript">
        function RedirectionPage() {
            document.location.href = "{{ route('login') }}";
        }
    </script>
</head>

<body style="background-color:#39b49a;" onLoad="setTimeout('RedirectionPage()', 2500)">

    <div style="margin-top: 10rem;" class="container align-items-center">
        <img src="{{ asset('images/heart-loading2.gif') }}" class="mx-auto d-block" style="width:37%; height:350px;">
    </div>
   


    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
