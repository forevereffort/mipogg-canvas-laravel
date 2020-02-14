<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@stack('meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
		<div class="container">
			{{-- <div class="sign-in"><a href="{{ route('login') }}">{{ __('Login') }}</a></div> --}}
			<div class="logo">
				<a href="{{ url('/fr') }}"><img src="/images/logo.png" alt=""></a>
				<div class="mask"></div>
			</div>
			<div id="mobile-menu-button" class="mobile-menu-button" data-status="close">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<nav class="header-menu">
				<ul>
					<li><a href="{{ url('/fr#a-propos') }}">À propos</a></li>
					<li><a href="{{ url('/fr#partenaires') }}">Partenaires</a></li>
					<li><a href="{{ url('/fr#contact') }}">Contact</a></li>
					<li class="{{ is_active_menu('blog') }}"><a href="{{ route('fr.blog.index') }}">Blogue</a></li>
					<li class="language" style="padding-left: 10px;"><a href="{{ route('home') }}">En</a></li>
				</ul>
			</nav>
		</div>
		<nav id="mobile-menu" style="display: none;">
			<ul>
				<li><a href="{{ url('/fr#a-propos') }}">>À propos</a></li>
				<li><a href="{{ url('/fr#partenaires') }}">Partenaires</a></li>
				<li><a href="{{ url('/fr#contact') }}">Contact</a></li>
				<li class="active"><a  href="{{ route('fr.blog.index') }}">Blogue</a></li>
				<li class="language"><a href="{{ route('home') }}">En</a></li>
			</ul>
		</nav>
	</header>
    @yield('content')
    <footer>
		<div class="container">
			<div class="footer-nav-copyright">
				<nav>
					<ul>
						<li><a href="{{ url('/fr#contact') }}">Contact</a></li>
						<li><a href="{{ url('/fr#a-propos') }}">À propos</a></li>
						<li><a href="{{ url('/fr#telecharger') }}">Télécharger l'application</a></li>
					</ul>
				</nav>
				<div class="copyright">
					<p>{{ date('Y') }}  MIPOGG Inc. Tous droits réservés.</p>
				</div>
			</div>
			<div class="footer-social">
				<ul>
					<li><a href="https://www.facebook.com/mipogg" target="_blank"><img src="/images/social/facebook.png" alt=""></a></li>
					<li><a href="https://twitter.com/MipoggApp" target="_blank"><img src="/images/social/twitter.png" alt=""></a></li>
					<li><a href="https://www.linkedin.com/company/mipogg" target="_blank"><img src="/images/social/linkedin.png" alt=""></a></li>
				</ul>
			</div>
		</div>
	</footer>
	<div class="ajax-spinner hide"></div>
</body>
</html>
