<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Calculator</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calculator.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/calculator.js') }}"></script>

</head>
<body>

<div class="container">
    <div class="header clearfix">
        @yield('header')
    </div>

    <div>
        @yield('sidebar-up')
    </div>

    <footer class="footer">
        @yield('footer')
    </footer>

</div>
</body>
</html>