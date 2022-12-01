<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
	</head>
	<body>
		<header>
			@include('menu')
		</header>
		<aside>
			@yield('bar')
		</aside>
		<main>
			@yield('content')
		</main>
		<footer>
			@include('contakt')
		</footer>
	</body>
</html>

