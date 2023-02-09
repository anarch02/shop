<!DOCTYPE html>
<html lang="ru">
<head>
<title>LACORE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	@yield('css_link')

@vite([
    'resources/sass/app.scss',
	'resources/css/app.css',
    'resources/js/app.js',
])
</head>
<body>

<div class="super_container">

	<!-- Header -->

	@include('include.header')

	<!-- Menu -->

	@include('include.menu')
	
	<!-- Home -->

	@yield('content')

	<!-- Footer -->
	
	@include('include.footer')
</div>

    @include('include.script')
	@yield('js_link')
</body>
</html>