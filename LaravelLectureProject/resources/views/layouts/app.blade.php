<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header-section clearfix">
        @include('partials.navbar')
    </header>

	@yield('content')

    <footer class="footer-section text-center mt-5 text-muted">
        @include('partials.footer')
    </footer>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/mixitup.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
